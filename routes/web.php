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
use App\User;
Route::group(['prefix' => LaravelLocalization::setLocale() ,
'middleware' => ['localeSessionRedirect', 'localizationRedirect']] , function(){
Route::get('/', function () {
  $user=Auth::user();
    return view('layouts.layout',compact('user'));
})->middleware('auth');

Route::get('/admin', function () {
  $user=Auth::user();
    return view('usermanagment.adduser',compact('user'));
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
});
Route::post('/adduser','home@adduser');
