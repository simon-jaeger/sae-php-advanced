<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController {
  function show(Request $request) {
    $id = $request->input('id');
    $response = Http::get('https://pokeapi.co/api/v2/pokemon/' . $id);
    $pokemon = $response->json();
    return [
      'id' => $pokemon['id'],
      'name' => $pokemon['name'],
      'weight' => $pokemon['weight'],
    ];
  }
}
