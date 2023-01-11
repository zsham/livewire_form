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
//Route::get('/home2', function () {
//    return view('home1');
//})->name('hope');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('hometest');

Route::get('/home1', [App\Http\Controllers\home1::class, 'home1'])->name('home1_live');

Route::get('/daftar', [App\Http\Controllers\HomeController::class, 'daftar_index'])->name('daftar_user');

Route::get('/category', [App\Http\Controllers\HomeController::class, 'category_index'])->name('daftar_category');