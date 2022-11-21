<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/dashboard', function () {
    return redirect ('db');
});
Route::get('/', function () {
    return redirect ('tampil');
});

Route::get('/coba', function () {
    return view ('coba');
});

    Route::get('db', [ArtikelController::class, 'tampildashboard']);
    Route::get('tampil', [ArtikelController::class, 'tampildepan']);


Auth::routes();
Route::middleware(['auth', 'admin', 'editor'])->group(function () {

Route::resource('artikel', ArtikelController::class);
Route::resource('kategori', KategoriController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
Route::resource('user', UserController::class);
});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
