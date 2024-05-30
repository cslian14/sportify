<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Import HomeController
use App\Http\Controllers\ProductController;

//Define routes
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // Redirect to /redirect route
        return redirect('/redirect');
    })->name('dashboard');
});

Route::get('/products', function () {
    return view('products');
});
Route::get('/redirect', [HomeController::class, 'redirect']); // Use HomeController method
Route::resource('products', ProductController::class)->middleware('auth');
Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::post('/add-product', [ProductController::class, 'addProductPost']);
Route::get('/admin', [ProductController::class, 'index'])->name('admin');

