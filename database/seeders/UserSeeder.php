<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach (range(1,10) as $index) {
        DB::table('users')->insert([
         'name' => fake()->name(),
         'email' => fake()->unique()->safeEmail(),
         'phone' => fake()->unique()->phoneNumber(15),
         'password' => \Hash::make('12345678'),
         'user_type_id' => 1,
       ]);
      }

       foreach (range(1,10) as $index) {
         DB::table('users')->insert([
          'name' => fake()->name(),
          'email' => fake()->unique()->safeEmail(),
          'phone' => fake()->unique()->phoneNumber(15),
          'password' => \Hash::make('12345678'),
          'user_type_id' => 2,
        ]);
       }
    }
}
