<?php

namespace App\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Storage;

class UploadsController {
  function index() {
    return Upload::all();
  }

  function create(Request $request) {
    $request->validate(['file' => ['file']]);
    $file = $request->file('file');
    $upload = Upload::make();
    $upload->file = Storage::putFile($file);
    $upload->save();
    return $upload;
  }
}
