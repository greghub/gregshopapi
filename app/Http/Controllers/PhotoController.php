<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhotoHandler;

class PhotoController extends Controller
{
  public function upload(Request $request) {

    $photo = $request->photo;

    if ($photo) {
      try {        

        $filename = (new PhotoHandler)->upload($photo);

        return response()->json($filename, 200);
      } catch (Exception $e) {
        return response()->json($e, 400);
      }
    }

  }
}