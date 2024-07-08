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

    for ($i = 0; $i < 9; $i++) {
      User::create([
        'email' => fake()->email(),
        'password' => 'password',
      ]);
    }

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

    // comments
    ////////////////////////////////////////////////////////////////////////////////
    Comment::create([
      'text' => 'awesome article',
      'article_id' => 1,
      'user_id' => 2,
    ]);

    Comment::create([
      'text' => 'best article',
      'article_id' => 1,
      'user_id' => 3,
    ]);

    Comment::create([
      'text' => 'cool article',
      'article_id' => 1,
      'user_id' => 4,
    ]);

  }
}
