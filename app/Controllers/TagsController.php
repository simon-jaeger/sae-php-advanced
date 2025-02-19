<?php

namespace App\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController {
  function index(Request $request) {
    return Tag::all();
  }

  function create(Request $request) {
    $payload = Tag::validate($request);
    return Tag::create($payload);
  }
}
