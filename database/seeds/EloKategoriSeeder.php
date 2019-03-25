<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
class EloKategoriSeeder extends Seeder
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
              DB::table('kategori')->insert([
                  'nama_kategori' => $faker->text,
                ]);
                }

    }
}
