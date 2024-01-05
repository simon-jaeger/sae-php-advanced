<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Seeder as BaseSeeder;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends BaseSeeder {
  function run() {
    User::create([
      'email' => 'alpha@mailinator.com',
      'password' => 'password',
    ]);

    Tweet::create([
      'text' => 'my first tweet',
      'user_id' => 1,
    ]);

    Tweet::create([
      'text' => 'the second tweet',
      'user_id' => 1,
    ]);

    Tweet::create([
      'text' => 'three tweets already',
      'user_id' => 1,
    ]);

    Tweet::create([
      'text' => 'another tweet',
      'user_id' => 2,
    ]);
  }
}
