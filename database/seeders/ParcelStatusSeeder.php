<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ParcelStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('parcel_statuses')->insert([
          ['parcel_status' => "Pending"],
          ['parcel_status' => "Biker Accept"],
          ['parcel_status' => "Picked Up"],
          ['parcel_status' => "Completed"],
      ]);
    }
}
