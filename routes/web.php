<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UsersController@index');


Route::post('/login', 'UsersController@login')->name('login');


Route::get('/report', function () {
    return view('report');
});

Route::get('/admin', 'ResController@admin');
Route::get('/clear-order/{table}', 'ResController@clearOrder');
Route::get('/list/{table}', 'ResController@viewOrder');


Route::get('/report-customer', 'ResController@customer');
Route::get('/report-sale', 'ResController@sale')->name('sale');
Route::post('/report-sale', 'ResController@sale')->name('report-sale');
Route::get('/report-menu', 'ResController@reportmenu');
Route::get('/report-category', 'ResController@reportcategory');


Route::get('/edit-menu/{id}', 'ResController@edit_menu');
Route::post('/update-menu/{id}', 'ResController@update_menu')->name('update_menu');
Route::get('/delete-menu/{id}', 'ResController@delete_menu');
Route::get('/add-menu', 'ResController@add_menu')->name('add_menu');
Route::post('/add-menu-data', 'ResController@add_menu_data')->name('add_menu_data');

Route::get('/edit-category/{id}', 'ResController@edit_category');
Route::post('/update-category/{id}', 'ResController@update_category')->name('update_category');
Route::get('/delete-category/{id}', 'ResController@delete_category');
Route::get('/add-category', 'ResController@add_category')->name('add_category');
Route::post('/add-category-data', 'ResController@add_category_data')->name('add_category_data');


Route::get('/report-emp', 'ResController@emp');
Route::get('/edit-emp/{id}', 'ResController@edit_emp');
Route::post('/update-emp/{id}', 'ResController@update_emp')->name('update_emp');
Route::get('/delete-emp/{id}', 'ResController@delete_emp');
Route::get('/add-emp', 'ResController@add_emp')->name('add_emp');
Route::post('/add-emp-data', 'ResController@add_emp_data')->name('add_emp_data');
