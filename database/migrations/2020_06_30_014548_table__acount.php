<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableAcount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Acount',function($table){
            $table ->increments('id');
            $table ->string('name',100);
            $table ->string('email',100)->unique();
            $table ->string('phone',11)->unique()->nullable();
            $table ->string('password');
            $table ->string('token',80)->unique()->nullable()->default(null);
            $table ->string('avatar',200)->nullable();
            $table->date('age')->nullable();
            $table ->boolean('gender')->nullable();
            $table->integer('id_hierarchy');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'api_token' => Str::random(60),
    ]);
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('Acount');
    }
}
