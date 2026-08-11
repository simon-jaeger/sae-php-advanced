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
      'name' => 'alpha',
      'password' => 'password',
      'is_admin' => true,
    ]);

    User::create([
      'email' => 'bravo@mailinator.com',
      'name' => 'bravo',
      'password' => 'password',
    ]);

    User::create([
      'email' => 'charlie@mailinator.com',
      'name' => 'charlie',
      'password' => 'password',
    ]);

    // articles
    ////////////////////////////////////////////////////////////////////////////
    for ($i = 0; $i < 20; $i++) {
      Article::create([
        'title' => fake()->word(),
        'content' => fake()->sentence(),
        'user_id' => 1,
        // 'user_id' => random_int(1, 3),
      ]);
    }

    // comments
    ////////////////////////////////////////////////////////////////////////////
    for ($i = 0; $i < 20; $i++) {
      Comment::create([
        'text' => fake()->sentence(),
        'article_id' => random_int(1, 5),
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
