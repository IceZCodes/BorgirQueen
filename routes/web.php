<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('page.index', [
        'title' => 'Home',
        'active' => 'home',
    ]);
})->name('index');

Route::get('/menu', function () {
    return view('page.menu', [
        'title' => 'Menu',
        'active' => 'menu',
    ]);
})->name('menu');

Route::get('/cart', function () {
    return view('page.cart', [
        'title' => 'Cart',
        'active' => 'cart'
    ]);
})->name('cart');

Route::get('/orders', function () {
    return view('page.order', [
        'title' => 'Order',
        'active' => 'order'
    ]);
})->name('orders');

Route::get('/about', function () {
    return view('page.about', [
        'title' => 'About Us',
        'active' => 'about',
    ]);
})->name('about');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware([])->group(function() {
    Route::prefix('/admin')->group(function() {
        Route::get('/', function() {
            return view('page.admin.dashboard', [
                'title' => 'Admin',
                'active' => 'admin'
            ]);
        });
    });
});
