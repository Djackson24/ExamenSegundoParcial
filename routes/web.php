<?php


use App\Mare;
use App\Antelope;
use App\Dugong;
use App\Frog;
use App\Octopus;
use App\Vicuna;

use Illuminate\Http\Request;
use App\Http\Requests;

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


Route::get('/animales/id/{$id}', function($id){

    $ante = DB::table('antelopes')->antelopes($id);

//   $an=App\Animal::find($id)->dugongs;
//   $du=App\Animal::find($id)->mares;
//   $ma=App\Animal::find($id)->vicunas;
//   $vi=App\Animal::find($id)->antelopes;
//   $fr=App\Animal::find($id)->frogs;
//   $oc=App\Animal::find($id)->octopuses;
//   return $an . $du . $ma . $vi . $fr . $oc ;

return $ante;
})->middleware('grupo1');


Route::get('/frogs/delete/{id}', function ($id) {
    App\Frog::destroy($id);
    $x = App\Frog::all();

    return 'Frog'.$id.' deleted' . $x;
});
Route::get('/dugongs/delete/{id}', function ($id) {
    App\Dugong::destroy($id);
    $x = App\Dugong::all();

    return 'Dugong'.$id.' deleted' . $x;
});
Route::get('/mares/delete/{id}', function ($id) {
    App\Mare::destroy($id);
    $x = App\Mare::all();

    return 'Mare'.$id.' deleted' . $x;
});
Route::get('/vicunas/delete/{id}', function ($id) {
    App\Vicuna::destroy($id);
    $x = App\Vicuna::all();

    return 'Vicuna'.$id.' deleted' . $x;
});
Route::get('/antelopes/delete/{id}', function ($id) {
    App\Antelope::destroy($id);
    $x = App\Antelope::all();

    return 'Antelope'.$id.' deleted' . $x;
});
Route::get('/octopuses/delete/{id}', function ($id) {
    App\Octopus::destroy($id);
    $x = App\Octopus::all();

    return 'Octopus'.$id.' deleted' . $x;
});

Route::get('Mares/{id}',function($id){
    $us = Mare::find($id);
    return $us;
})->where(['id' => '[\d]+'])->middleware('grupo1');

Route::get('Antelope/{id}',function($id){
    $us = Antelope::find($id);
    return $us;
})->where(['id' => '[\d]+']);

Route::get('Dugong/{id}',function($id){
    $us = Dugong::find($id);
    return $us;
})->where(['id' => '[\d]+']);

Route::get('Frog/{id}',function($id){
    $us = Frog::find($id);
    return $us;
})->where(['id' => '[\d]+']);

Route::get('Octopus/{id}',function($id){
    $us = Octopus::find($id);
    return $us;
})->where(['id' => '[\d]+']);

Route::get('Vicuna/{id}',function($id){
    $us = Vicuna::find($id);
    return $us;
})->where(['id' => '[\d]+']);

Route::post('mares/add', function(Request $request){
    $mares = new Mare;
    $mares -> nombre = $request->input('nombre');
    $mares -> color = $request->input('color');
    $mares -> peso= $request->input('peso');
    $mares -> longitud = $request->input('longitud');
    $mares -> edad = $request->input('edad');
    $mares -> animal_id = $request->input('animal_id');
    $mares -> save();
})->middleware('NuevoRegistro');

Route::post('dugongs/add', function(Request $request){
    $dugongs = new Dugong;
    $dugongs -> nombre = $request->input('nombre');
    $dugongs -> color = $request->input('color');
    $dugongs -> peso= $request->input('peso');
    $dugongs -> longitud = $request->input('longitud');
    $dugongs -> edad = $request->input('edad');
    $dugongs -> animal_id = $request->input('animal_id');
    $dugongs -> save();
})->middleware('NuevoRegistro');

Route::post('vicunas/add', function(Request $request){
    $vicunas = new Vicuna;
    $vicunas-> nombre = $request->input('nombre');
    $vicunas-> color = $request->input('color');
    $vicunas-> peso= $request->input('peso');
    $vicunas-> longitud = $request->input('longitud');
    $vicunas-> edad = $request->input('edad');
    $vicunas-> animal_id = $request->input('animal_id');
    $vicunas-> save();
})->middleware('NuevoRegistro');

Route::post('antelopes/add', function(Request $request){
    $antelopes = new Antelope;
    $antelopes-> nombre = $request->input('nombre');
    $antelopes-> color = $request->input('color');
    $antelopes-> peso= $request->input('peso');
    $antelopes-> longitud = $request->input('longitud');
    $antelopes-> edad = $request->input('edad');
    $antelopes-> animal_id = $request->input('animal_id');
    $antelopes-> save();
})->middleware('NuevoRegistro');

Route::post('frogs/add', function(Request $request){
    $frogs= new Frog;
    $frogs-> nombre = $request->input('nombre');
    $frogs-> color = $request->input('color');
    $frogs-> peso= $request->input('peso');
    $frogs-> longitud = $request->input('longitud');
    $frogs-> edad = $request->input('edad');
    $frogs-> animal_id = $request->input('animal_id');
    $frogs-> save();
})->middleware('NuevoRegistro');

Route::post('octopuses/add', function(Request $request){
    $octopuses= new Octopus;
    $octopuses-> nombre = $request->input('nombre');
    $octopuses-> color = $request->input('color');
    $octopuses-> peso= $request->input('peso');
    $octopuses-> longitud = $request->input('longitud');
    $octopuses-> edad = $request->input('edad');
    $octopuses-> animal_id = $request->input('animal_id');
    $octopuses-> save();
})->middleware('NuevoRegistro');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
