<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {
    // articles
    ////////////////////////////////////////////////////////////////////////////
    Article::create([
      'title' => 'alpha',
      'content' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'user_id' => 1,
    ]);

    Article::create([
      'title' => 'bravo',
      'content' => 'ipsum dolor sit amet, consectetur adipiscing elit.',
      'user_id' => 1,
    ]);

    Article::create([
      'title' => 'charlie',
      'content' => 'dolor sit amet, consectetur adipiscing elit.',
      'user_id' => 1,
    ]);

    // users
    ////////////////////////////////////////////////////////////////////////////
    User::create([
      'email' => 'alpha@mailinator.com',
      'password' => 'password',
    ]);

    for ($i = 0; $i < 9; $i++) {
      User::create([
        'email' => fake()->email(),
        'password' => 'password',
      ]);
    }

  }
}
