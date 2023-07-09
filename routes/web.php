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

Route::get('/idea', function () {
    return view('tambah_recipe');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/logint', function () {
    return view('proses.login');
});

Route::get('/registert', function () {
    return view('proses.register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/recipe', [App\Http\Controllers\RecipeController::class, 'recipe'])->name('recipe');

Route::get('recipe/1', [App\Http\Controllers\RecipeController::class, 'recipeid'])->name('recipe');

Route::get('/profil', [\App\Http\Controllers\ProfilController::class, 'profil'])->name('profil saya');