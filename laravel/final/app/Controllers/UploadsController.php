<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class UploadsController {
  function create(Request $request) {
    $user = \Auth::user();
    $request->validate(['file' => ['required', 'max:2048']]);
    $file = $request->file('file');
    return \Storage::putFileAs(
      'uploads/user-' . $user->id,
      $file,
      $file->getClientOriginalName(),
    );
  }

  function destroy(Request $request) {
    $user = \Auth::user();
    $name = $request->input('name');
    $path = 'uploads/user-' . $user->id . '/' . $name;
    \Storage::delete($path);
    return $path;
  }
}
