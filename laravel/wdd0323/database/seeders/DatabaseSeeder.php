<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {
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

    for ($i = 0; $i < 60; $i++) {
      Article::create([
        'title' => fake()->word(),
        'content' => fake()->sentence(),
        'user_id' => 1,
      ]);
    }

    Tag::create(['name' => 'red',]);
    Tag::create(['name' => 'green',]);
    Tag::create(['name' => 'blue',]);
    Tag::create(['name' => 'magenta',]);
    Tag::create(['name' => 'cyan',]);
    Tag::create(['name' => 'yellow',]);
    Tag::create(['name' => 'black',]);
    Tag::create(['name' => 'white',]);

  }
}
