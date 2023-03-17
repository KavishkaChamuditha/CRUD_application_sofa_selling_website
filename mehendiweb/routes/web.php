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

Route::get('products/store', function () {
    return view('products.store');
});

Route::get('/products/productview{product}', [ProductController::class, 'productview'])->name('products.productview');

Route::get('/products/edit{product}', [ProductController::class, 'edit'])->name('products.edit');

//just routing to the list.php file
Route::get('/products/list', [ProductController::class, 'show']);

//redirecting to the list file 
Route::get('/products/list', [ProductController::class, 'show'])->name('products.list');

Route::resource('products', ProductController::class);

//custormer side route 
Route::get('custormer/index', function () {
    return view('custormer.index');
});