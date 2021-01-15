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
    return view('login');
})->name('login');

Route::get('/login',[\App\Http\Controllers\LoginController::class,'showLogin'])->name('show.login');
Route::post('/login',[\App\Http\Controllers\LoginController::class,'login'])->name('user.login');
Route::get('/login/blog', [\App\Http\Controllers\BlogController::class,'showBlog'])->name('show.blog');
