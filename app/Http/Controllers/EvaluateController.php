<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evaluate;
use App\user;

class EvaluateController extends Controller
{
    function postLikePlace(Request $request){
    	$id_user = $request->id_user;
    	$id_place = $request->id_place;
    	$comment = $request->comment;
    	$rating = $request->rating;
    	$like = $request->like;

    	$count = evaluate::where([['evaluates.id_place',$id_place],['evaluates.id_user',$id_user]])->count();
    	if($count > 0){
    		$table = evaluate::where([['evaluates.id_place',$id_place],['evaluates.id_user',$id_user]])->get();
    		$numberLike = $table[0]->like;
    		$table = evaluate::where([['evaluates.id_place',$id_place],['evaluates.id_user',$id_user]])->update(['comment'=>$comment,'rating'=>$rating,'like'=>$numberLike ==0 ? 1 : 0]);
    		echo "update";
    	}else{
    		$table = new evaluate();
    		$table->id_user=$id_user;
    		$table->id_place=$id_place;
    		$table->comment=$comment;
    		$table->rating=$rating;
    		$table->like=$like;
    		$table->save();
    		echo "success";
    	}
    }
    
}
