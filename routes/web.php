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

Route::get('/home', function () {
    return view('home');
});

Route::get('/recipe', function () {
    return view('recipe_page');
});

Route::get('/recipe/id', function () {
    return view('recipe');
});

Route::get('/idea', function () {
    return view('tambah_recipe');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/admin', function () {
    return view('admin');
});