<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = faker::create();
            for ($i=0; $i< 5; $i++){
              //
              DB::table('tampil')->insert([
                  'nama_tampil' => $faker->text,
                ]);
                }
  //
    }
}
