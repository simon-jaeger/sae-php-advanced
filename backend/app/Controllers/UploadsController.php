<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// basic media example
class UploadsController {
  function create(Request $request) {
    // NOTE: file media in php only work for POST requests!
    $user = Auth::user();
    $file = $request->file('file');
    return Storage::putFileAs(
      'uploads/' . $user->id,
      $file,
      $file->getClientOriginalName(),
    );
  }

  function destroy(Request $request) {
    $user = Auth::user();
    $filename = $request->input('filename');
    $path = 'uploads/' . $user->id . '/' . $filename;
    if (!Storage::exists($path))
      return abort(404, 'file does not exist');
    Storage::delete($path);
    return $path;
  }
}
