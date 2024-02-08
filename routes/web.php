<?php

use App\Http\Controllers\ButtonsController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/forms', [FormsController::class, 'index']);
Route::get('/cards', [CardsController::class, 'index']);
Route::get('/charts', [ChartsController::class, 'index']);
Route::get('/buttons', [ButtonsController::class, 'index']);
