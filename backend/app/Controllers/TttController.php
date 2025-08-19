<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

// persistent server side tic-tac-toe games

class TttController {
  function show(Request $request) {
    $id = $request->input('id');
    $board = Storage::get("ttt/$id.json");
    return [
      'id' => $id,
      'board' => json_decode($board),
    ];
  }

  function create(Request $request) {
    $id = Str::uuid();
    $board = [
      '___',
      '___',
      '___',
    ];
    Storage::put("ttt/$id.json", json_encode($board));
    return [
      'id' => $id,
      'board' => $board,
    ];
  }

  function update(Request $request) {
    $id = $request->input('id');
    $board = $request->input('board');;
    $winner = '';
    $combos = [
      [$board[0][0], $board[0][1], $board[0][2]], // horizontal
      [$board[1][0], $board[1][1], $board[1][2]],
      [$board[2][0], $board[2][1], $board[2][2]],
      [$board[0][0], $board[1][0], $board[2][0]], // vertical
      [$board[0][1], $board[1][1], $board[2][1]],
      [$board[0][2], $board[1][2], $board[2][2]],
      [$board[0][0], $board[1][1], $board[2][2]], // diagonal
      [$board[0][2], $board[1][1], $board[2][0]],
    ];
    foreach ($combos as $c) {
      if ($c[0] === '_') continue;
      if ($c[0] === $c[1] && $c[1] === $c[2]) {
        $winner = $c[0];
        break;
      }
    }
    Storage::put("ttt/$id.json", json_encode($board));
    return [
      'id' => $id,
      'board' => $board,
      'winner' => $winner,
    ];
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    Storage::delete("ttt/$id.json");
    return ['id' => $id];
  }
}
