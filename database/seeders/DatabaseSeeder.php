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

    for ($i = 0; $i < 9; $i++) {
      User::create([
        'email' => fake()->email(),
        'password' => 'password',
      ]);
    }

    // tweets
    ////////////////////////////////////////////////////////////////////////////
//    Tweet::create([
//      'text' => 'my first tweet',
//      'user_id' => 1,
//    ]);
//
//    Tweet::create([
//      'text' => 'my second tweet',
//      'user_id' => 1,
//    ]);
//
//    Tweet::create([
//      'text' => 'my third tweet',
//      'user_id' => 1,
//    ]);

    for ($i = 0; $i < 30; $i++) {
      Tweet::create([
        'text' => fake()->sentence,
        'user_id' => fake()->numberBetween(1, User::all()->count()),
      ]);
    }

    // likes
    ////////////////////////////////////////////////////////////////////////////
//    Like::create([
//      'user_id' => 1,
//      'tweet_id' => 1,
//    ]);

    foreach (User::all() as $user) {
      foreach (Tweet::inRandomOrder()->limit(10)->get() as $tweet) {
        Like::create([
          'user_id' => $user->id,
          'tweet_id' => $tweet->id,
        ]);
      }
    }

  }
}
