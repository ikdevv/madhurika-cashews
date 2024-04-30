<?php

use App\Http\Controllers\BillingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendControllers\CheckoutController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\FrontendControllers\PlaceOrderController;
use App\Http\Controllers\FrontendControllers\FrontendController;
use App\Http\Controllers\FrontendControllers\ProductsController;
use App\Http\Controllers\OrderController;

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
    /* return view('welcome'); */
    return view('frontend.home');
});

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

Auth::routes();



/* Route::get('/home', [HomeController::class, 'index'])->name('home'); */

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    //render the view product view
    Route::get('/viewproducts', [ProductController::class, 'renderView']);

    //render the add product view
    Route::get('/addproduct', [ProductController::class, 'renderAdd']);

    //add product in database
    Route::post('/addproduct', [ProductController::class, 'storeProduct']);

    //render the edit product view
    Route::get('/editproduct/{id}', [ProductController::class, 'renderEdit']);

    //edit product in database
    Route::put('/editproduct/{id}', [ProductController::class, 'updateProduct']);

    //delete product
    Route::get('/products/{product_id}/delete', [ProductController::class, 'deleteProduct']);

    /* User */

    //render the view users view
    Route::get('/viewusers', [UserViewController::class, 'renderView']);
});


/*Front-end Routes */
Route::get('/products', [ProductsController::class, 'render']);

Route::get('/contactUs', [FrontendController::class, 'rendercontactUs']);

Route::get('/aboutUs', [FrontendController::class, 'renderAboutUs']);

Route::get('/products/{product_id}', [ProductsController::class, 'renderDetailsView']);


Route::middleware(['auth'])->group(function () {
    Route::get('addtocart/{product_id}', [ProductsController::class, 'addToCart'])->name('add-to-cart');
    Route::get('/cart', [FrontendController::class, 'renderCart']);
    Route::get('/checkout', [ProductsController::class, 'renderCheckoutCart']);

    Route::post('/addbilling', [BillingController::class, 'store'])->name('billing.store');
});
