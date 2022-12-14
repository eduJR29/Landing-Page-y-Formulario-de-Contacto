<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\SitioController;
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

Route::get('/actualizaciones/{version_id?}', [PaginaController::class, 'actualizaciones']);
Route::get('/landingpage', [SitioController::class, 'landingpage']);
Route::get('/contacto/{codigo?}', [SitioController::class, 'contacto']);
Route::post('/recibe-form-contacto', [SitioController::class, 'recibeFormContacto']);