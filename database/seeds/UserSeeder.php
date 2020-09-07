<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'user',
      'email' => 'user@domain.com',
      'password' => bcrypt('123456')
      ]);
    }
  }
