<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Berita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('berita', function(Blueprint $table){
        $table->increments('id_berita')->unique;
        $table->string('judul_berita');
        $table->string('penulis_berita');
        $table->Date('tanggal_berita');
        $table->string('isi_berita');
      });        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('berita');    //
        //
    }
}
