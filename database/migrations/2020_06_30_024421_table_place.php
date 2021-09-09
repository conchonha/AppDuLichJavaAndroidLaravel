<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Place',function($table){
            $table->increments('id');
            $table->string('name',100);
            $table->string('image',200);
            $table->string('introduce',200);
            $table->string('overview',4000);
            $table->string('arrayImageView',4000);
            $table->integer('id_ingredient');
            $table->string('lat',200);
            $table->string('lng',200);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('Place');
    }
}
