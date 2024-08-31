<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/forms', function () {
    return view('forms');
});
Route::get('/cards', function () {
    return view('cards');
});
Route::get('/charts', function () {
    return view('charts');
});
Route::get('/buttons', function () {
    return view('buttons');
});
Route::get('/modals', function () {
    return view('modals');
});
Route::get('/tables', function () {
    return view('tables');
});

Route::get('/pages/login', function () {
    return view('pages.login');
});
Route::get('/pages/register', function () {
    return view('pages.register');
});
Route::get('/pages/forgot-password', function () {
    return view('pages.forgot-password');
});
Route::get('/pages/404', function () {
    return view('pages.404');
});
Route::get('/pages/blank', function () {
    return view('pages.blank');
});
