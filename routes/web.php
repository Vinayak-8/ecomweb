<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Product;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $product=Product::get();
    $category=Category::get();
    return view('dashboard', ['products'=> $product, 'category'=>$category]);
})->name("dash");

Route::get('addProduct', [ProductController::class, 'addProduct'])->name("addProduct");
Route::post('upload',[ProductController::class,'store'])->name('upload');

Route::get('addCategory', [CategoryController::class, 'addCategory'])->name("addCategory");
Route::post('upload1',[CategoryController::class,'store'])->name('upload1');





