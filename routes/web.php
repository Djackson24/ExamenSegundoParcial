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
    $ante = DB::table('antelopes')->get();
    $du = DB::table('dugongs')->get();
    $mares = DB::table('mares')->get();
    $vicu = DB::table('vicunas')->get();
    $fro = DB::table('frogs')->get();
    $octp = DB::table('octopuses')->get();
    
return $ante . $du . $mares . $vicu . $fro . $octp;
});


Route::get('animales/{$id}', function($id){
  $an=App\antelopes::find($id)->get($id);
  $du=App\dugongs::find($id)->get($id);
  $ma=App\mares::find($id)->get($id);
  $vi=App\vicunas::find($id)->get($id);
  $fr=App\frogs::find($id)->get($id);
  $oc=App\octopuses::find($id)->get($id);
  return $an . $du . $ma . $vi . $fr . $oc ;
})->middleware('grupo1');

Route::get('Frog/{id}', function ($id) {
    App\frogs::destroy($id);
    return 'Frog'.$id.' deleted';
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
