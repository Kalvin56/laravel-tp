<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacadeController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\ObserverController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CompositeController;
use App\Http\Controllers\SingletonController;
use App\Http\Controllers\ConcessionIteratorController;

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

Route::get('/', [SingletonController::class, 'show']);

Route::get('/singleton', [SingletonController::class, 'show']);

Route::get('/factory', [FactoryController::class, 'show']);

Route::get('/facade', [FacadeController::class, 'show']);

Route::get('/concession_iterateur', [ConcessionIteratorController::class, 'show']);

Route::get('/observer', [ObserverController::class, 'show']);

Route::get('/strategy', [StrategyController::class, 'show']);

Route::get('/template', [TemplateController::class, 'show']);

Route::get('/command', function(){
    return view('command');
});

Route::get('/composite', [CompositeController::class, 'show']);

