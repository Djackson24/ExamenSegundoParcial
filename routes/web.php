<?php

use App\Mares;

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


Route::get('/animales/{$id}', function($id){
  $an=App\Antelope::find($id)->get($id);
  $du=App\Dugong::find($id)->get($id);
  $ma=App\Mare::find($id)->get($id);
  $vi=App\Vicuna::find($id)->get($id);
  $fr=App\Frog::find($id)->get($id);
  $oc=App\Octopus::find($id)->get($id);
  return $an . $du . $ma . $vi . $fr . $oc ;
})->middleware('grupo1');

Route::get('/frogs/{id}', function ($id) {
    App\Frog::destroy($id);
    $x = App\Frog::all();

    return 'Frog'.$id.' deleted' . $x;
});
Route::get('/dugongs/{id}', function ($id) {
    App\Dugong::destroy($id);
    $x = App\Dugong::all();

    return 'Dugong'.$id.' deleted' . $x;
});
Route::get('/mares/{id}', function ($id) {
    App\Mare::destroy($id);
    $x = App\Mare::all();

    return 'Mare'.$id.' deleted' . $x;
});
Route::get('/vicunas/{id}', function ($id) {
    App\Vicuna::destroy($id);
    $x = App\Vicuna::all();

    return 'Vicuna'.$id.' deleted' . $x;
});
Route::get('/antelopes/{id}', function ($id) {
    App\Antelope::destroy($id);
    $x = App\Antelope::all();

    return 'Antelope'.$id.' deleted' . $x;
});
Route::get('/octopuses/{id}', function ($id) {
    App\Octopus::destroy($id);
    $x = App\Octopus::all();

    return 'Octopus'.$id.' deleted' . $x;
});

Route::post('mares/add', function(Request $request){
    $mares = new Mare();
    $mares -> nombre = $request->input('nombre');
    $mares -> color = $request->input('color');
    $mares -> peso= $request->input('peso');
    $mares -> longitud = $request->input('longitud');
    $mares -> edad = $request->input('edad');
    $mares -> animal_id = $request->input('animal_id');
    $mares -> save();
});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
