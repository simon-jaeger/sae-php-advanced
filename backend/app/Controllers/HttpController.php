<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class HttpController {
  function github(Request $request) {
    $user = $request->input('user');
    $response = Http::get("https://api.github.com/users/$user");
    $data = $response->json();
    return $data;
  }

  function pokemon(Request $request) {
    $ids = $request->input('ids');
    $team = new Collection();
    foreach ($ids as $id) {
      $response = Http::get("https://pokeapi.co/api/v2/pokemon/$id");
      $data = $response->json();
      $team->push([
        'id' => $data['id'],
        'name' => $data['name'],
        'height' => $data['height'],
      ]);
    }
    return $team;
  }
}
