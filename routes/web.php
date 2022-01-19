<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //
use App\Http\Controllers\CalculadoraController;

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

//php artisan make:controller HomeController #01
Route::get('/', [HomeController::class, 'index']); //#02
Route::get('/classes/{job}', [HomeController::class, 'classes']); //#03 
//depois botão direito no HomeController > import class #04

Route::get('/calculadora', [CalculadoraController::class, 'calculadora']);
Route::post('/soma', [CalculadoraController::class, 'soma']);