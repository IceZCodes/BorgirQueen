<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FoodController;

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
    return view('page.index', [
        'title' => 'Home',
        'active' => 'home',
    ]);
})->name('index');

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

Route::middleware([])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin');

        Route::get('/allCustomer', function () {
            return view('page.admin.allCustomer', [
                'title' => 'Admin',
                'active' => 'admin'
            ]);
        });

        Route::get('/customerOrder', function () {
            return view('page.admin.customerOrder', [
                'title' => 'Admin',
                'active' => 'admin'
            ]);
        });
    });
});

//routes cart
Route::get('/menu', [FoodController::class, 'index'])->name('menu')->middleware('auth');
Route::post('/cart/{id}', [FoodController::class, 'store'])->name('addCart')->middleware('auth');
Route::get('/cart', [FoodController::class, 'show'])->name('cart')->middleware('auth');
