<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {
    // users
    ////////////////////////////////////////////////////////////////////////////
    User::create([
      'email' => 'alpha@mailinator.com',
      'password' => 'password',
    ]);

    User::create([
      'email' => 'bravo@mailinator.com',
      'password' => 'password',
    ]);

    User::create([
      'email' => 'charlie@mailinator.com',
      'password' => 'password',
    ]);

    // articles
    ////////////////////////////////////////////////////////////////////////////
    for ($i = 0; $i < 10; $i++) {
      Article::create([
        'title' => fake()->word(),
        'content' => fake()->sentence(),
        'user_id' => 1,
      ]);
    }

    // comments
    ////////////////////////////////////////////////////////////////////////////////
    for ($i = 0; $i < 20; $i++) {
      Comment::create([
        'text' => fake()->sentence(3),
        'article_id' => random_int(1, 10),
        'user_id' => random_int(1, 3),
      ]);
    }

  }
}
