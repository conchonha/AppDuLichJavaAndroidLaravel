<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class MenuController extends Controller
{
    function getDataMenuTop(){
    	$table = menu::where('id_table','=',0)->get();
    	
    	return $this->respondWithJson($table,$table->count());
    }

    function getDataMenuBottom(){
    	$table = menu::where('id_table','=',1)->get();
    	
    	return $this->respondWithJson($table,$table->count());
    }

    public function getDataMenuAll(){
        $table = menu::all();
        return $this->respondWithJson($table,$table->count());
    }

    public function respondWithJson($data,$total)
    {
        return response()->json([
            'message' => 'Successfully',
            'statuscode' => '200',
            'total' => $total,
            'data' => $data,
        ]);
    }
}
