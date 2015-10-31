<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Songs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('songs', function($tabel){
            $tabel->increments('id');
            $tabel->string('artist');
            $tabel->string('title');
            $tabel->string('slug')->unique();
            $tabel->text('lyrics');
            $tabel->timestamps();
        });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('songs');
        //
    }
}
