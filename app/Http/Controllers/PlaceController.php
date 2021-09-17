<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\place;
use App\evaluate;

class PlaceController extends Controller
{
	public function getPlaceFromName(Request $request){
		$table = place::where('place.name',$request->name)->get();
		return $this->respondWithJson($table,$table->count());
	}

	public function getLatLngPlace(){
		$table = place::select('place.name','place.image','place.introduce','place.lat','place.lng')->all();
		return $this->respondWithJson($table,$table->count());
	}

	public function getDataPlaceIdMenu(Request $request){
		$id = $request->id;
		$table = place::select('place.id','place.name','place.image','place.introduce','place.arrayImageView','place.lat','place.lng')->join('ingredient','place.id_ingredient','=','ingredient.id')->where('ingredient.id_menu','=',$id)->get();
		return $this->respondWithJson($table,$table->count());
	}

	public function getDataPlaceStrSearch(Request $request){
		$strSearch=$request->strSearch;
        $table=place::where('place.name','like','%'.$strSearch.'%')->get();
		
		return $this->respondWithJson($table,$table->count());
	}

	public function getDataPlaceIdPlace(Request $request){
		$id = $request->id;
		if($id != null){
			$table = place::where('place.id',$id)->get();


			$evaluate = evaluate::select('evaluates.id','evaluates.id_user','evaluates.id_place','evaluates.comment','evaluates.rating','evaluates.like','evaluates.created_at','evaluates.updated_at','acount.name','acount.avatar')->join('acount','acount.id','=','evaluates.id_user')->where('evaluates.id_place',$id)->get();

			$table = $this->responseDataWithEvalute($table);
			return $this->respondWithJsonGetPlaceIdPlace($table,$evaluate);
		}
	}

	public function getDataPlaceHomeRandom(Request $request){
		$test = $request->check;
		$id = $request->id;
		if($test == 0){

			if($id != null){
				$table;

				$count = place::join('ingredient','place.id_ingredient','=','ingredient.id')->where('ingredient.id_menu','=',$id)->count();
				if($count > 7){
					$table = place::select('place.id','place.name','place.image')->join('ingredient','place.id_ingredient','=','ingredient.id')->where('ingredient.id_menu','=',$id)->get()->random(7);
				}else{
					$table = place::select('place.id','place.name','place.image')->join('ingredient','place.id_ingredient','=','ingredient.id')->where('ingredient.id_menu','=',$id)->orderBy('ingredient.id','desc')->get();
				}
				
				// for ($i=0; $i < $table->count(); $i++) { 
				// 	$mot = evaluate::where([['id_place',$table[$i]->id],['rating',1]])->count();
				// 	$hai =  evaluate::where([['id_place',$table[$i]->id],['rating',2]])->count();
				// 	$ba =  evaluate::where([['id_place',$table[$i]->id],['rating',3]])->count();
				// 	$bon =  evaluate::where([['id_place',$table[$i]->id],['rating',4]])->count();
				// 	$nam =  evaluate::where([['id_place',$table[$i]->id],['rating',5]])->count();
					
				// 	$trungbinh = (1*$mot + 2*$hai + 3*$ba + 4*$bon + 5*$nam) / (($mot+$hai+$ba+$bon+$nam) ?: 1);
				// 	$like = evaluate::where([['id_place',$table[$i]->id],['evaluates.like',1]])->sum('evaluates.like');

				// 	$table[$i]->rating = $trungbinh;
				// 	$table[$i]->like = $like;
				// }
				$table = $this->responseDataWithEvalute($table);

				return $this->respondWithJson($table,$table->count());
			}
		}else{
			if($id != null){
				$table;

				$count = place::join('ingredient','place.id_ingredient','=','ingredient.id')->where('ingredient.id','=',$id)->count();
				if($count > 7){
					$table = place::select('place.id','place.name','place.image')->join('ingredient','place.id_ingredient','=','ingredient.id')->where('ingredient.id','=',$id)->get()->random(7);
				}else{
					$table = place::select('place.id','place.name','place.image')->join('ingredient','place.id_ingredient','=','ingredient.id')->where('ingredient.id','=',$id)->orderBy('ingredient.id','desc')->get();
				}
			
				// for ($i=0; $i < $table->count(); $i++) { 
				// 	$mot = evaluate::where([['id_place',$table[$i]->id],['rating',1]])->count();
				// 	$hai =  evaluate::where([['id_place',$table[$i]->id],['rating',2]])->count();
				// 	$ba =  evaluate::where([['id_place',$table[$i]->id],['rating',3]])->count();
				// 	$bon =  evaluate::where([['id_place',$table[$i]->id],['rating',4]])->count();
				// 	$nam =  evaluate::where([['id_place',$table[$i]->id],['rating',5]])->count();
					
				// 	$trungbinh = (1*$mot + 2*$hai + 3*$ba + 4*$bon + 5*$nam) / (($mot+$hai+$ba+$bon+$nam) ?: 1);
				// 	$like = evaluate::where([['id_place',$table[$i]->id],['evaluates.like',1]])->sum('evaluates.like');

				// 	$table[$i]->rating = $trungbinh;
				// 	$table[$i]->like = $like;
				// }
				$table = $this->responseDataWithEvalute($table);
				return $this->respondWithJson($table,$table->count());
			}
		}	
	}

	public function getDataPlaceIdIngredient(Request $request){
		$id = $request->id;
		$table = place::select('place.id','place.name','place.image','place.introduce')->where('place.id_ingredient','=',$id)->orderBy('place.id','desc')->get();
//--------------------------------------------------------------------------------
		// for ($i=0; $i < $table->count(); $i++) { 
		// 			$mot = evaluate::where([['id_place',$table[$i]->id],['rating',1]])->count();
		// 			$hai =  evaluate::where([['id_place',$table[$i]->id],['rating',2]])->count();
		// 			$ba =  evaluate::where([['id_place',$table[$i]->id],['rating',3]])->count();
		// 			$bon =  evaluate::where([['id_place',$table[$i]->id],['rating',4]])->count();
		// 			$nam =  evaluate::where([['id_place',$table[$i]->id],['rating',5]])->count();
					
		// 			$trungbinh = (1*$mot + 2*$hai + 3*$ba + 4*$bon + 5*$nam) / (($mot+$hai+$ba+$bon+$nam) ?: 1);
		// 			$like = evaluate::where([['id_place',$table[$i]->id],['evaluates.like',1]])->sum('evaluates.like');

		// 			$table[$i]->rating = $trungbinh;
		// 			$table[$i]->like = $like;
		// 		}
		$table = $this->responseDataWithEvalute($table);
		return $this->respondWithJson($table,$table->count());
	}

	public function getDataImageHomeRandom(){
		$table = place::select('place.id','place.image')->orderBy('place.id','desc')->get()->random(21);
		return $this->respondWithJson($table,$table->count());
	}

	public function getAllImagePlace(){
		$table = place::select('place.id','place.image')->orderBy('place.id','desc')->get();
		return $this->respondWithJson($table,$table->count());
	}

	public function getDataBanerRandom(){
		$table = place::select('place.id','place.image')->orderBy('place.id','desc')->get()->random(5);
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

    public function respondWithJsonGetPlaceIdPlace($dataPlace,$dataEvaluate)
    {
        return response()->json([
            'message' => 'Successfully',
            'statuscode' => '200',
            'totalPlace' => $dataPlace->count(),
            'totalEvaluate' =>$dataEvaluate->count(),
            'data' => $dataPlace,
            'dataEvaluate' => $dataEvaluate,
        ]);
    }

    public function responseDataWithEvalute($table){
			for ($i=0; $i < $table->count(); $i++) { 
					$mot = evaluate::where([['id_place',$table[$i]->id],['rating',1]])->count();
					$hai =  evaluate::where([['id_place',$table[$i]->id],['rating',2]])->count();
					$ba =  evaluate::where([['id_place',$table[$i]->id],['rating',3]])->count();
					$bon =  evaluate::where([['id_place',$table[$i]->id],['rating',4]])->count();
					$nam =  evaluate::where([['id_place',$table[$i]->id],['rating',5]])->count();
					
					$trungbinh = (1*$mot + 2*$hai + 3*$ba + 4*$bon + 5*$nam) / (($mot+$hai+$ba+$bon+$nam) ?: 1);
					$like = evaluate::where([['id_place',$table[$i]->id],['evaluates.like',1]])->sum('evaluates.like');

					$table[$i]->rating = $trungbinh;
					$table[$i]->like = $like;
				}
		return $table;
    }
    
}
