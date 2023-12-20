<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder as BaseSeeder;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends BaseSeeder {
  function run() {
    User::create([
      'email' => 'alpha@mailinator.com',
      'password' => 'password',
    ]);
  }
}
