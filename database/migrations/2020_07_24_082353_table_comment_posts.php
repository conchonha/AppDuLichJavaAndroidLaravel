<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCommentPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('CommentPosts',function($table){
              $table->increments('id');
              $table->integer('id_user');
              $table->integer('id_posts');
              $table->string('comment',255);
              $table->integer('like');
              $table->integer('id_stranger')->nullable();
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
         Schema::drop('CommentPosts');
    }
}
