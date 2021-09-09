<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postsuser;
use App\commentposts;

class CommentPostsController extends Controller
{
	//lay bai viet
    public function getDataUserPosts(){
    	$iduser = 2;
    	$dataPosts = postsuser::select('postsuser.id','postsuser.image','postsuser.content','postsuser.created_at','acount.name')->join('acount','postsuser.id_user','=','acount.id')->where('acount.id','=',$iduser)->get();
    	return $this->respondWithJsonPosts($dataPosts);
    }

    //lay comment
     public function commentPosts(){
    	$idPost = 1;
    	$dataComment = commentposts::select('commentposts.id_stranger','acount.avatar','acount.name','commentposts.comment','commentposts.created_at','commentposts.like')->join('acount','commentposts.id_user','=','acount.id')->where('commentposts.id_posts','=',$idPost)->get();

    	$totalLikePosts = commentposts::select('acount.avatar','acount.name','commentposts.comment','commentposts.created_at','commentposts.like')->join('acount','commentposts.id_user','=','acount.id')->where([['commentposts.id_posts','=',$idPost],['commentposts.like','=',1]])->count();

    	return $this->respondWithJsonComments($dataComment,$totalLikePosts);
    }

    public function respondWithJsonPosts($dataPosts)
    {
        return response()->json([
            'message' => 'Successfully',
            'statuscode' => '200',
            'totalPosts' => $dataPosts->count(),
            'dataPosts' => $dataPosts,
        ]);
    }
	 public function respondWithJsonComments($dataComment,$totalLikePosts)
    {
        return response()->json([
            'message' => 'Successfully',
            'statuscode' => '200',
            'totalComment' => $dataComment->count(),
            'dataComment' => $dataComment,
            'totalLikePosts'=> $totalLikePosts
        ]);
    }

}
