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


Route::get('/animales',function(){
    return App\Antelope::all();
    return  App\Dugong::all();
    return  App\Frog::all();
    return  App\Mare::all();
    return  App\Octopus::all();
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
