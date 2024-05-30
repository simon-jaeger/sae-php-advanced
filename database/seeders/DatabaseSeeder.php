<?php

namespace Database\Seeders;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Seeder;

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

    // tweets
    ////////////////////////////////////////////////////////////////////////////
    Tweet::create([
      'text' => 'alpha',
      'user_id' => 1,
    ]);

  }
}
