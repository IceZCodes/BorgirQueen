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
    return view('page.welcome');
});

Route::get('/index', function () {
    return view('page.index');
})->name('index');

Route::get('/menu', function () {
    return view('page.menu');
})->name('menu');

Route::get('/login', function () {
    return view('page.login');
})->name('login');

Route::get('/register', function () {
    return view('page.register');
})->name('register');
