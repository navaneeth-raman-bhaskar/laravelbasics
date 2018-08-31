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


Route::get('hi/my/{id}', 'MyController@myFunction'
)->name("nava")->where('id','[0-9]+');//parametered url and pattern matching;//loads controller function AND SAVES THE URI



//
//Route::view('view/{uname}', 'users', ['name'=>'qwerty']
//);



Route::get('hi/{user?}', function ($u='john'){
    return 'hi '.$u;
}
)->where('user','[A-Za-z]+');//parametered url and pattern matching




Route::get('yr/{year}', function ($u){
    return 'year is '.$u;})->middleware(\App\Http\Middleware\CheckYear::class);// without register in kernel


Route::get('yr/{year}', function ($u){
    return 'year is '.$u;})->middleware('check');// registered in kernel



Route::get('log/user', function (){
    return "Done";})->middleware('authen:user');

Route::get('log/admin', function (){
    return "Done";})->middleware('authen:admin');

Route::get('log/super', function (){
    return "Done";})->middleware('authen:superadmin');


Route::resource('book', 'BookController'); //several route declaration in one command
Route::resource('books', 'BooksController'); //several route declaration in one command
///or//  Route::resource(['book'=>'BookController','books'=>'BooksController']);
///
Route::post('valid/req', 'ValidationController@req');
Route::post('valid/submit', 'ValidationController@validat');
Route::view('valid/form', 'form');

Route::get('cook/r', 'CookieController@cook');
Route::view('cook/f', 'cookview');

Route::view('home', 'pages.home');
Route::view('contact', 'pages.contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::view('forum','forum');
Route::view('forum/email','auth/passwords/email')->name('email');
Route::view('forum/reset','auth/passwords/reset')->name('reset');
//Route::view('forum/login','auth/login')->name('login');
//Route::view('forum/register','auth/register')->name('register');


Route::view('/dtable','Dtable');
Route::view('/dt','ssdt');
Route::get('/load','DController@getNotesAsJson');
Route::get('/many','DController@many2many');
Route::get('/whocommented','DController@whichUserCommented');
Route::get('/whoposted','DController@whichUserPosted');
Route::get('/whoreplied','DController@whichUserReplied');
Route::get('/testing','DController@testing');
Route::get('/hmt','DController@findAllReplyToPost');


Route::get('test',function (){
    $coll=collect([1,2,3,4,5,'t','y']);
    $val=$coll->each(function ($item, $key){
return $key;
    });
    dd($val);
    });