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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin');
        Route::get('/food/add', [AdminController::class, 'addFoodPage'])->name('addFood');
        Route::post('/food/add', [AdminController::class, 'createFood'])->name('createFood');
        Route::get('/food/edit/{id}', [AdminController::class, 'editFoodPage'])->name('editFood');
        Route::post('/food/edit/{id}', [AdminController::class, 'updateFood'])->name('updateFood');
        Route::delete('/food/delete/{id}', [AdminController::class, 'deletefood'])->name('deleteFood');
        Route::get('/customers', [AdminController::class, 'allCustomer'])->name('allCustomer');
        Route::get('/orders', [AdminController::class, 'customerOrders'])->name('customerOrder');
    });
});

//routes menu
Route::get('/menu', [FoodController::class, 'index'])->name('menu');
Route::get('/menu/drink', [FoodController::class, 'drink'])->name('drink');
Route::get('/menu/extra', [FoodController::class, 'extra'])->name('extra');
Route::get('/menu/{id}', [FoodController::class, 'item'])->name('item');

//routes cart
Route::middleware(['auth'])->group(function () {
    Route::prefix('/cart')->group(function () {
        Route::get('/', [FoodController::class, 'show'])->name('cart');
        Route::post('/update/{id}', [FoodController::class, 'update'])->name('updateCart');
        Route::delete('/delete/{id}', [FoodController::class, 'delete'])->name('deleteCart');
        Route::post('/order', [FoodController::class, 'orderUser'])->name('orderCart');
        Route::post('/{id}', [FoodController::class, 'store'])->name('addCart');
    });
});

