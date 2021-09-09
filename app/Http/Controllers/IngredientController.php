<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingredient;

class IngredientController extends Controller
{
	public function getData($id){
		$table = ingredient::where('ingredient.id_menu','=',$id)->get();
		if($table){
			
			return $this->respondWithJson($table,$table->count());
		}
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
