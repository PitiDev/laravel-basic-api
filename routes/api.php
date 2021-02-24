<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// "email":"appzap@admin.la",
// "password":"appzap@2021"

Route::post('/auth/login', function () {
    $credentials = request()->only(['email','password']);
    if(!auth()->validate($credentials)){
      abort(401);
    }else{
        $user = User::where('email', $credentials['email'])->first();
        $user->tokens()->delete();
        $token = $user->createToken('token-appzap');
        return response()->json(['status'=>'success','token'=>$token->plainTextToken]);
    }
});

//Auth Token
Route::group(['middleware'=>'auth:sanctum'],function() {
    Route::get('/get-menu', 'ResController@index');
});

//for menu and category

Route::post('/add-category', 'ResController@addCategory');
Route::get('/get-menu-web', 'ResController@menuWeb');
Route::get('/get-category', 'ResController@category');
Route::post('/cate-menu', 'ResController@menuByCate');

//Register restuanrant
Route::post('/register', 'RegisterController@register');

//for restuarant
Route::get('/get-restuarant', 'ResController@restUsers');

//for Admin
Route::get('/get-admin', 'UsersController@getadmin');
Route::post('/add-admin', 'UsersController@store');
Route::post('/delete-admin', 'UsersController@destroy');
Route::post('/login', 'UsersController@login');



