<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSongs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // query builder
        DB::table('songs')->insert([
             'artist'=>'Nightwish',
             'title'=> 'Nemo',
             'slug'=>'nemo',
             'created_at'=>date('Y-m-d H:m:s'),
             'updated_at'=>date('Y-m-d H:m:s')
            ]);
        DB::table('songs')->insert([
             'artist'=>'Nightwish',
             'title'=> 'Eva',
             'slug'=>'eva', 
             'created_at'=>date('Y-m-d H:m:s'),
             'updated_at'=>date('Y-m-d H:m:s')
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('songs')->where('slug', '=', 'nemo')->delete();
        DB::table('songs')->where('slug', '=', 'eva')->delete();
    }
}
