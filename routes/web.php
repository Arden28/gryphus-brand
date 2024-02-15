<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Payment\PayPalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use Modules\Dashboard\app\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/legal-mentions', [FrontendController::class, 'legal'])->name('brand.legal');
    // Contact
    Route::post('/contact', [FrontendController::class, 'processForm'])->name('contact.post');
    Route::get('/wishlist', [WishController::class, 'index'])->middleware('auth')->name('wishlist');

    Route::get('/shop', [ShopController::class, 'index'])->name('shop');

    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

    // Wishlist
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');

    Route::get('/checkout', [CheckoutController::class, 'index'])->middleware(['auth', 'cart'])->name('checkout');

    // PRODUCT
    Route::get('/gry-one', [ProductController::class, 'gryOne'])->name('product.gry');
    Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// Stripe
Route::get('/stripe', [PaymentController::class, 'stripe']);
Route::post('/stripe', [PaymentController::class, 'stripePost'])->name('stripe.payment');

require __DIR__.'/auth.php';
