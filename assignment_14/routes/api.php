<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});
// Question 1:
// You have a Laravel application with a form that submits user information using a POST request. Write the code to retrieve the 'name' input field value from the request and store it in a variable called $name.
// module 14 question 1 post route 

// http://127.0.0.1:8000/api/userinfo
Route::post('/userinfo',[AssignmentController::class,'UserInfo']);
//////////////////////////////////////////////////////////////////

// Question 2:

// In your Laravel application, you want to retrieve the value of the 'User-Agent' header from the current request. Write the code to accomplish this and store the value in a variable called $userAgent.


// module 14 question 2 post route 
// http://127.0.0.1:8000/api/useragent
Route::post('/useragent',[AssignmentController::class,'UserAgent']);
///////////////////////////////////////////////////////////
// Question 3:


// You are building an API endpoint in Laravel that accepts a GET request with a 'page' query parameter. Write the code to retrieve the value of the 'page' parameter from the current request and store it in a variable called $page. If the parameter is not present, set $page to null


// module 14 question 3 get route 
// http://127.0.0.1:8000/api/query
Route::get('/query',[AssignmentController::class,'ApiEndpoint']);
//////////////////////////////////////////////////////////////////
// Question 4:


// Create a JSON response in Laravel with the following data:


// module 14 question 4 get route  
// http://127.0.0.1:8000/api/jsonresponse
Route::get('/jsonresponse',[AssignmentController::class,'JsonResponse']);
///////////////////////////////////////////////////////

// Question 5:


// You are implementing a file upload feature in your Laravel application. Write the code to handle a file upload named 'avatar' in the current request and store the uploaded file in the 'public/uploads' directory. Use the original filename for the uploaded file.

// module 14 question 5 post route 
// http://127.0.0.1:8000/api/upload
Route::post('/upload',[AssignmentController::class,'FileUpload']);
/////////////////////////////////////////////////////////


// Question 6:


// Retrieve the value of the 'remember_token' cookie from the current request in Laravel and store it in a variable called $rememberToken. If the cookie is not present, set $rememberToken to null.remember_token
// module 14 question  6 post route  

// http://127.0.0.1:8000/api/setcookie
Route::post('/setcookie',[AssignmentController::class,'SetCookie']);
////////////////////////////////////////////////////////////////

// Question 7:


// Create a route in Laravel that handles a POST request to the '/submit' URL. Inside the route closure, retrieve the 'email' input parameter from the request and store it in a variable called $email. Return a JSON response with the following data:
// module 14 question 7 post route
// http://127.0.0.1:8000/api/submit
Route::post('/submit',function(Request $request){
    $email = $request->input('email');
    if($email){
        return array(
            "success"=> true,
            "message"=> "Form submitted successfully."
        );
    }else{
        return "email not found...";
    }
});
/////////////////////////////////////////////////////////////////
