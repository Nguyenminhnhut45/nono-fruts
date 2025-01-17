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
//Fontend

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/Trang-chu', [HomeController::class, 'index']);



//Backend

use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin_dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'log_out']);

//Category product
use App\Http\Controllers\CategoryProduct;

Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);
Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);

Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);

Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);


use App\Http\Controllers\BrandProduct;

Route::get('/add-brand-product', [BrandProduct::class, 'add_brand_product']);
Route::get('/all-brand-product', [BrandProduct::class, 'all_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}', [BrandProduct::class, 'delete_brand_product']);

Route::get('/unactive-brand-product/{brand_product_id}', [BrandProduct::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [BrandProduct::class, 'active_brand_product']);


Route::post('/save-brand-product', [BrandProduct::class, 'save_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);

//Danh mục sản phẩm

Route::get('/Xuat-su-trai-cay/{brand_id}', [BrandProduct::class, 'show_brand_home']);

use App\Http\Controllers\ProductController;

Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);




Route::post('/save-product', [ProductController::class, 'save_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);


//Detail sản phẩm
Route::get('/chi-tiet-san-pham/{product_id}', [ProductController::class, 'detail_product']);


//Cart
Route::get('/cart', [ProductController::class, 'cart']);
Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart']);
Route::patch('/update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('/remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');