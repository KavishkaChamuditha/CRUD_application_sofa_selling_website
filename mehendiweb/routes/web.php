<?php
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('products/dashboard', function () {
    return view('products.dashboard');
});

Route::get('products/create', function () {
    return view('products.create');
});

Route::get('products/store', function () {
    return view('products.store');
});

Route::resource('products', ProductController::class);