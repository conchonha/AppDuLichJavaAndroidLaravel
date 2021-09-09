<?php

use Illuminate\Database\Seeder;

class seeder_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$img = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgolBdeaXdt7hZ4G28YiA8shOCg4jkBg08uA&usqp=CAU';
        DB::table('Acount')->insert([
        	['name'=>'sangthai','email'=>'Thaibasang8@gmail.com','phone'=>'0366426402','password'=>Hash::make('kzumi2110'),
        	 'token'=>Str::Random(60),'avatar'=>$img,'age'=>'1999-10-10','gender'=>true,
        	]
        ]);
        //return Hash::check($suppliedPassword, Auth::user()->password, []);
    }
}
