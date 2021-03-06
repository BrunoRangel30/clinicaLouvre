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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/autorizacao', function () {
    return view('welcome');
})->name('autorizacao');*/

Route::get('authorization','App\Http\Controllers\MelhorEnvioController@autorizacaoAPI')->name('autorizacaoAPI');
Route::get('authorization/callback','App\Http\Controllers\MelhorEnvioController@callback')->name('callback');