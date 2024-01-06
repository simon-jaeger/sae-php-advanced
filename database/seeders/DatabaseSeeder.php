<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Seeder as BaseSeeder;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends BaseSeeder {
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

    // tweets
    ////////////////////////////////////////////////////////////////////////////
    Tweet::create([
      'text' => 'my first tweet',
      'user_id' => 1,
    ]);

    Tweet::create([
      'text' => 'the second tweet',
      'user_id' => 1,
    ]);

    Tweet::create([
      'text' => 'tweet by user #2',
      'user_id' => 2,
    ]);

    // likes
    ////////////////////////////////////////////////////////////////////////////
    Like::create([
      'user_id' => 2,
      'tweet_id' => 1,
    ]);

    Like::create([
      'user_id' => 3,
      'tweet_id' => 1,
    ]);

  }
}
