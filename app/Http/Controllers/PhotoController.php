<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhotoHandler;

class PhotoController extends Controller
{

  protected $photoHandler;

  public function __construct(PhotoHandler $photoHandler) {
    $this->photoHandler = $photoHandler;
  }

  public function upload(Request $request) {

    $photo = $request->photo;

    if ($photo) {
      try {        

        $filename = $this->photoHandler->upload($photo);

        return response()->json($filename, 200);
      } catch (Exception $e) {
        return response()->json($e, 400);
      }
    }

  }
}