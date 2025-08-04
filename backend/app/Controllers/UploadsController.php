<?php

namespace App\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadsController {
  function index(Request $request) {
    return Auth::user()->uploads()->get();
  }

  function show(Request $request, $id) {
    $upload = Upload::findOrFail($id);
    if (!$upload->is_public) {
      $user = Auth::user();
      if (!$user)
        return abort(401, 'authentication necessary');
      if ($upload->user_id !== $user->id)
        return abort(404, 'not owned by user');
    }
    return Storage::response($upload->path);
  }

  function create(Request $request) {
    $payload = $request->validate(Upload::$rules);
    $upload = Auth::user()->uploads()->make();
    $upload->path = Storage::putFile('uploads', $payload['file']);
    $upload->save();
    return $upload;
  }

  function update(Request $request) {
    // NOTE: file uploads in php only work for POST requests!
    $id = $request->input('id');
    $payload = $request->validate(Upload::$rules);
    $upload = Auth::user()->uploads()->findOrFail($id);
    $upload->update($payload);
    return $upload;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $upload = Auth::user()->uploads()->findOrFail($id);
    Storage::delete($upload->path);
    $upload->delete();
    return $upload;
  }
}
