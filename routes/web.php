<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Payment\PayPalController;
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

Route::get('/payment/create', [PayPalController::class, 'createPayment'])->name('paypal.create');
Route::get('/payment/success', [PayPalController::class, 'paymentSuccess'])->name('paypal.success');
Route::get('/payment/cancel', [PayPalController::class, 'paymentCancel'])->name('paypal.cancel');
Route::get('/payment/execute', [PayPalController::class, 'executePayment'])->name('paypal.execute');

// Route::get('paypal-payment',[PayPalController::class,"payment"])->name('paypal.payment');
// Route::get('paypal-success',[PayPalController::class,"success"])->name('paypal.success');
// Route::get('paypal-cancel',[PayPalController::class,'cancel'])->name('paypal.cancel');

// Route::get('handle-payment', [PayPalController::class, 'handlePayment'])->name('make.payment');
// Route::get('cancel-payment', [PayPalController::class, 'paymentCancel'])->name('cancel.payment');
// Route::get('payment-success', [PayPalController::class, 'paymentSuccess'])->name('success.payment');

require __DIR__.'/auth.php';
