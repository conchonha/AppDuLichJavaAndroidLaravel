<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableEvaluates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Evaluates",function($table){
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_place');
            $table->string('comment',255);
            $table->integer('rating');
            $table->integer('like');
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
         Schema::drop('Evaluates');
    }
}
