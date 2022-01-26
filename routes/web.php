<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacadeController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\SingletonController;

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

Route::get('/singleton', [SingletonController::class, 'show']);

Route::get('/factory', [FactoryController::class, 'show']);

Route::get('/facade', [FacadeController::class, 'show']);


