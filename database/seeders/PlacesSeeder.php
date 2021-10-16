<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $places = ['オフライン','オンライン','両方'];
        foreach ($places as $place) {
            DB::table('places')->insert('place');
    　}
    }
}
