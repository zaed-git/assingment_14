<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{


// text
public function index(){

//
}
//////////////////////
// assignment function start
/////////////////////
  // function  question 1
  
  function UserInfo(Request $request):string{
    $name = $request->input('name');
    return $name;
}
// function  question 2
function UserAgent(Request $request):string{
    $userAgent = $request->header('User-Agent');
    return $userAgent;
}

// function  question 3
function ApiEndpoint(Request $request){
    $page = $request->query('page',null);
    if($page !== null){
        return $page;
    }else{
        return "null";
    }
}
// function  question 4
function JsonResponse():JsonResponse{
    $data = array(
        "message"=> "Success",
        "data"=>array(
            "name"=> "John Doe",
            "age"=> 25
        )
    );
    return response()->json($data);
}
// function  question 5
function FileUpload(Request $request):bool{
    $file=$request->file('avatar');
    $file->move(public_path('uploads'),$file->getClientOriginalName());
    return true;
}
// function  question 6
function SetCookie(Request $request){
    $rememberToken = $request->cookie('remember_token',null);
    return $rememberToken;
}
  //////////////////////
// assignment function end
/////////////////////


}
