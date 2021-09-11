<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use Validator;

class UserController extends Controller
{

    public function updatePass(Request $request)
    {
        $table = user::where([['email','=',$request->email],['password','=',md5($request->password)]])->get();

        if ($table ->count() > 0){
            $table = user::where("email",$request["email"])->update(['password' => md5($request['newPassword'])]);
            return $this->respondWithJson(null,0,200,"Successfully");
        }

        return $this->respondWithJson(null,0,300,"Incorrect password");
    }

    public function updateUser(Request $request){

        $table = user::where("id",$request['id'])->update(['name'=>$request['name'],'email'=>$request['email'],'phone'=>$request['phone'],'age'=>$request['age'],'gender'=>$request['gender']]);
        if($table){
             $table = user::where("id",$request['id'])->get();
           return $this->respondWithJson($table,0,200,"Successfully");
        }

        return $this->respondWithJson(null,0,500,"Unable to update account, please try again later");
    }


       public function newPassword(Request $request)
    {
        $table = user::where("email",$request["email"])->update(['password' => md5($request['password'])]);
        if ($table) {
             return $this->respondWithJson(null,0,200,"Successfully");
        }
         return $this->respondWithJson(null,0,300,"Incorrect email");
    }


    public function register(Request $request)
    {
        $validator = validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:acount,EMAIL',
            'password' => 'required|not_regex:/(0)[!@#$%^&*()?:>]/|regex:/[a-z]/',
            ],
            [ 
            'name.required' => 'Malformed name',
            'email.unique' => 'Email already exists',
            'password.not_regex' => 'password invalid',
            ]
         );

       if ($validator->fails()){
               return $this->respondWithJson(null,0,300,$validator->errors());
        }
         $table = new user();
             $table->name = $request->name;
             $table->email = $request->email;
             $table->password = md5($request->password);
             $table->token = Str::Random(60);
             $table->avatar='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRDsanOS9e9oVDhhABGmoSHdjCkXnhfOyXMgg&usqp=CAU';
             $table->id_hierarchy=1;
             $table->save();
             return $this->respondWithJson($table,$table->count(),200,"Successfully");
    }


    public function login(Request $request){
        if($request->has('name') && $request->has('password')){
            $table = user::where([['email','=',$request->name],['password','=',md5($request->password)]])->get();

            if($table->count() > 0){
                return $this->respondWithJson($table,$table->count(),200,"Successfully");
            }
            return $this->respondWithJson([],0,300,"Account does not exist");

        }
            return $this->respondWithJson([],0,500,"Can't send data to server");   
    }

    public function checkEmail(Request $request){
        $table = user::where('email',$request->email)->get();

        if($table->count() > 0){
            return $this->respondWithJson(null,0,200,"Successfully");   
        }

          return $this->respondWithJson(null,0,300,"Email does not exist");   
    }


    public function getData(){
        $table = user::all();
        return $this->respondWithJson($table,$table->count());
    }


    public function getNameUser(Request $request){

        $table = user::where('id',$request['id'])->get();
        echo $table[0]["name"];

    }


    public function respondWithJson($data,$total,$statuscode,$message)
    {
        return response()->json([
            'message' => $message,
            'statuscode' => $statuscode,
            'total' => $total,
            'data' => $data,
        ]);
    }

}
