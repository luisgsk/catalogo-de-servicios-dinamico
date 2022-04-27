<?php

use Illuminate\Support\Facades\Route;

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
Route::get('salud/redes/{subseguro}', [App\Http\Controllers\HomeController::class, 'redes']);
Route::get('/live_search', 'App\Http\Controllers\LiveSearch@index');
Route::get('/live_search/action', 'App\Http\Controllers\LiveSearch@action')->name('live_search.action');



Route::get('/{cliente_id}', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->where(['cliente_id' => '[0-9]+']);
Route::get('/{seguro}', ['as' => 'seguro.index', 'uses' => 'App\Http\Controllers\SeguroController@index'])->where(['seguro' => 'salud|vida|vehicular']);
//Route::get('/seguroDesglose/{seguro}/{subseguro}', [/*'as' => 'seguro.desglose',*/ 'uses' => 'App\Http\Controllers\SeguroController@seguroDesglose'])->name('desglose');
 Route::get('/{seguros}/{subseguro}', ['as' => 'seguros.desglose', 'uses' => 'App\Http\Controllers\SeguroController@seguroDesglose']);

 /* Trazabilidad */
 Route::get('/setlog/{accion}/{seguro}/{subseguro}/{desglose}/{seccion}', [App\Http\Controllers\InteraccionController::class, 'setInteraccion'])/*->where(['seguro' => 'salud|vida|vehicular'])*/;

 //$accion, $seguro, $subseguro, $desglose, $seccion