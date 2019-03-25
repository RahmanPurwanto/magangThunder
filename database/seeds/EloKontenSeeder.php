<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
class EloKontenSeeder extends Seeder
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
            DB::table('berita')->insert([
              'judul_berita' => $faker->text,
              'penulis_berita' => $faker->text,
              'tanggal_berita' => $faker->date,
              'isi_berita' => $faker->text,

            ]);
        }
}
}
