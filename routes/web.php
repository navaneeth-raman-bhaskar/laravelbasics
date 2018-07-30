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
    return view('welcome');
});// loads view


Route::view('new/hello/hi', 'users');//shortcut method to load view


Route::get('hi/my', 'TestController@myFunction'
)->name("nava");//loads controller function AND SAVES THE URI



//
//Route::view('view/{uname}', 'users', ['name'=>'qwerty']
//);



Route::get('hi/{user?}', function ($u='john'){
    return 'hi '.$u;
}
)->where('user','[A-Za-z]+');//parametered url and pattern matching


