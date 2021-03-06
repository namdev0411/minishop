<?php

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

Route::get('/', function () {
    return view('app');
});

Auth::routes();

Route::get('/home',function(){
     return view('app');
});
Route::prefix('/admin')->group(function(){
    Route::get('/','Admin\AdminController@index');
});

Route::get('/test',function(){
    return view('test');
});