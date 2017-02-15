<?php
namespace App;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

ini_set('memory_limit', '256M');

class PhotoHandler
{

  protected $title;
  protected $path;

  public function __construct()
  {
    $this->path = public_path('uploads/');

    // create uploads folder if doesn't exist
    if (!file_exists($this->path)) {
        mkdir($this->path, 0777, true);
    }
  }

  /**
   * @param  string $path
   * @param  string $photo
   * @param  object $crop
   * @return string $photo
   */
  public function uploadRaw($photo, $crop)
  {
    $crop = json_decode($crop);

    $img = Image::make($this->path . $photo);
    $img->crop((int)$crop->width, (int)$crop->height, (int)$crop->x, (int)$crop->y);
    $img->save($this->path . $photo);

    return $photo;
  }

  /**
   * Uploads a photo from a URL
   * used in factories
   */
  public static function uploadFromUrl($photo)
  {
 
    $img = Image::make($photo);
    $filename = static::generateFilename('jpg');
    $img->save(static::path($filename));

    return $filename;
  }

  public function uploadAndProcess($photo, $crop)
  {

    $this->title = $photo;


    if($this->checkIfSVG($photo)) {
      return true;
    }


    $crop = json_decode($crop);

    $img = Image::make($this->path . $photo);
    $img->crop((int)$crop->width, (int)$crop->height, (int)$crop->x, (int)$crop->y);

    $this->resize($img);
    //$this->resize_md($img);
    //$this->resize_sm($img);

    return $img;
  }

  public function checkIfSVG($file) {
    $extension = explode('.', $file);
    if(end($extension) == 'svg') {
      return true;
    }
    return false;
  }

  public function resize($img) 
  {

    $photo = $this->title;

    $img->resize(1200, 800, function ($constraint) {
      $constraint->aspectRatio();
    });
    $img->save($this->path . $photo);

    return $photo;
  }

  public function resize_md($img) 
  {
    $img->resize(900, 600, function ($constraint) {
      $constraint->aspectRatio();
    });
    $photo_md = photo_md($this->title);
    $img->save($this->path . $photo_md);
  }

  public function resize_sm($img) 
  {
    $img->resize(450, 300, function ($constraint) {
      $constraint->aspectRatio();
    });
    $photo_md = photo_sm($this->title);
    $img->save($this->path . $photo_md);
  }

  public static function deletePhoto($photo)
  {
    $photo_original = static::path($photo);
    $photo_md = static::path(photo_md($photo));
    $photo_sm = static::path(photo_sm($photo));

    if(File::exists($photo_original)) {
      File::delete($photo_original);
    }

    if(File::exists($photo_md)) {
      File::delete($photo_md);
    }

    if(File::exists($photo_sm)) {
      File::delete($photo_sm);
    }
  }

  public function upload($file)
  {
    $photo = new static;
    $extension = $file->getClientOriginalExtension();
    $filename = static::generateFilename($extension);

    if($extension == 'svg') {
      $file->move($this->path, static::path($filename));
      return $filename;
    }

    $img = Image::make($file->getPathName());

    $img->save(static::path($filename));

    return $filename;
  }

  /**
   * Generate filename and prevent dublicate names
   * @param  string $extension
   * @return string $filename dot $extension
   */
  public static function generateFilename($extension='jpg')
  {
    $filename = str_random(12);
    while (file_exists(static::path($filename, $extension))) {
      $filename = str_random(12);
    }

    return "{$filename}.{$extension}";
  }

  /**
   * Return absolute path to the file
   * @param  string $filename
   * @return string public path and $filename
   */
  public static function path($filename)
  {
    return public_path('uploads/').$filename;
  }    
}
