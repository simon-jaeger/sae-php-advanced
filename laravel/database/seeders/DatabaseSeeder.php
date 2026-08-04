<?php

namespace Database\Seeders;

// faker: https://fakerphp.github.io

use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        'user_id' => random_int(1, 3),
      ]);
    }

    // comments
    ////////////////////////////////////////////////////////////////////////////
    for ($i = 0; $i < 10; $i++) {
      Comment::create([
        'text' => fake()->sentence(),
        'article_id' => random_int(1, 10),
        'user_id' => random_int(1, 3),
      ]);
    }

    // tags
    ////////////////////////////////////////////////////////////////////////////
    for ($i = 0; $i < 10; $i++) {
      Tag::create(['name' => fake()->word()]);
    }
  }
}
