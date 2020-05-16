<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/add-user','UsersController@store');
Route::post('/login', 'UsersController@login');

Route::get('/list-user', 'UsersController@index');
 
Route::post('/add-res', 'ResController@store');
Route::post('/update-user', 'UsersController@update');
Route::post('/delete-user', 'UsersController@destroy');

Route::get('/list-res', 'ResController@index');