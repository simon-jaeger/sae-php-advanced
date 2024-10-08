<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// basic uploads example
class UploadsController {
  function create(Request $request) {
    // NOTE: file uploads in php only work for POST requests!
    $user = Auth::user();
    $request->validate(['file' => ['required', 'max:2048']]);
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
