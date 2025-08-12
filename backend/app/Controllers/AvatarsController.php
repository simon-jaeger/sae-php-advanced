<?php

namespace App\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AvatarsController {
  function show(Request $request, $id) {
    $user = User::findOrFail($id);
    $letter = Str::of($user->email)->upper()->charAt(0);
    $svg = <<<SVG
      <svg width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <circle cx="100" cy="100" r="100" fill="#808080"/>
        <text 
          x="100" y="100"
          text-anchor="middle" dominant-baseline="central"
          font-size="100" font-family="sans-serif"
          fill="#ffffff"
          >$letter</text>
      </svg>
    SVG;
    return $svg;
  }
}
