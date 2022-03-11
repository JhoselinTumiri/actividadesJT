<?php

//use App\Actividad as AppActividad;
use Illuminate\Support\Facades\Route;
use App\Models\Actividad;

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

/*
Route::get('/', function () {
});*/

/*Route::get('/', function(){
    $actividades= Actividad::all();
    return view('actividades1', ['actividades'=>$actividades]);
});/*

//Route::get('/','App\\Http\\Controllers\ActividadController@index');

/**
 * Si no queremos indicar la ruta completa descomentamos la linea protectes en RouteServiceProvider.php de Providers y queda mas corta.
 */
Route::get('/','ActividadController@index');