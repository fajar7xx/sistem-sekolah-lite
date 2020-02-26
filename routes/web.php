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
});
Route::get('masuk', function(){
    return view('login');
});
Route::get('admin', function(){
    return view('admin');
});

//route untuk register, login, forgot password
Auth::routes(); 
// untuk memanipulasi register
Route::match(["GET", "POST"], "register", function(){
    return redirect('/login');
})->name('register');


Route::get('/home', 'HomeController@index')->name('home');
