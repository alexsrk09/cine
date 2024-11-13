<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\SillaController;

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
// route create sala with string name via request
Route::post('/createsala', [SalaController::class, 'create']);
Route::post('/createsilla', [SillaController::class, 'create']);
Route::post('/updatesilla', [SillaController::class, 'update']);
Route::get('/getallsalas', [SalaController::class, 'getAll']);
Route::get('getsillas/{id}', [SillaController::class, 'getSillas']);
Route::get('/prueba', function () {return view('/prueba');});
// Route::get('/token', function () {return csrf_token(); });
