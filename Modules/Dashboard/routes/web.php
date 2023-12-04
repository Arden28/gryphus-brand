<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\app\Http\Controllers\BannerController;
use Modules\Dashboard\app\Http\Controllers\Blog\PostCategoryController;
use Modules\Dashboard\app\Http\Controllers\Blog\PostController;
use Modules\Dashboard\app\Http\Controllers\Blog\TagController;
use Modules\Dashboard\app\Http\Controllers\CategoryController;
use Modules\Dashboard\app\Http\Controllers\CouponController;
use Modules\Dashboard\app\Http\Controllers\DashboardController;
use Modules\Dashboard\app\Http\Controllers\OrderController;
use Modules\Dashboard\app\Http\Controllers\ProductController;
use Modules\Dashboard\app\Http\Controllers\Setting\SettingController;
use Modules\Dashboard\app\Http\Controllers\Setting\UsersController;
use Modules\Dashboard\app\Http\Controllers\ShippingController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Banner
    Route::resource('banner', BannerController::class);
    // Category
    Route::resource('category', CategoryController::class);
    // Order
    Route::resource('order', OrderController::class);
    // Product
    Route::resource('product', ProductController::class)->except('show');
    Route::get('product/review', [ProductController::class, 'reviewIndex'])->name('product.reviews.index');
    // Shipping
    Route::resource('shipping', ShippingController::class);
    // Coupon
    Route::resource('coupon', CouponController::class);

    // BLOG

    // Post Categories
    Route::resource('post-category', PostCategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);

    // SETTINGS
    // Users
    Route::resource('users', UsersController::class);
    // Settings
    Route::resource('settings', SettingController::class)->except('create', 'store', 'edit');
    // Route::patch('settingsUpdate', [SettingController::class, 'settingsUpdate'])->name('settings.update');
});
