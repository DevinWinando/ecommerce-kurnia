<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\GeocodeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Broadcast::routes([
    'middleware' => ['auth:sanctum'],
]);

Route::group([
    'middleware' => ['pos'],
    'prefix' => 'ecommerce-pos',
], function () {
    Route::put('transaction/{id}', [EcommerceController::class, 'updateTransaction']);
});

Route::post('/sanctum/token', TokenController::class);

Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/categories', [ProductController::class, 'categories']);
Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/categories/{id}', [ProductController::class, 'getProductByCategory']);

// Warehouse routes (public)
Route::get('/warehouses', [WarehouseController::class, 'index']);
Route::get('/warehouses/nearest', [WarehouseController::class, 'nearest']);
Route::get('/warehouses/{id}', [WarehouseController::class, 'show']);

Route::post('/payment/callback', [PaymentController::class, 'callback']);

// Geocoding route (public, no auth required)
Route::get('/geocode/search', [GeocodeController::class, 'search']);

Route::middleware(['auth:sanctum', 'apply_locale'])->group(function () {
    Route::post('/auth/logout', [AuthController::class, 'logout']);

    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart/sync', [CartController::class, 'sync']);
    Route::post('/cart/checkout', [CartController::class, 'checkout']);

    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::get('/transactions/{id}', [TransactionController::class, 'show']);
    Route::get('/transactions/{id}/delivery-tracking', [TransactionController::class, 'deliveryTracking']);
    Route::post('/transactions/{id}/request-delivery', [TransactionController::class, 'requestDelivery']);

    /**
     * Auth related
     */
    Route::get('/users/auth', AuthController::class);

    /**
     * Users
     */
    Route::put('/users/{user}/avatar', [UserController::class, 'updateAvatar']);
    Route::resource('users', UserController::class);

    /**
     * Banners
     */
    Route::get('/banners', [BannerController::class, 'index']);
    Route::post('/banners', [BannerController::class, 'store']);
    Route::delete('/banners/{id}', [BannerController::class, 'destroy']);

    Route::get('/rooms', [ChatController::class, 'getRooms']); // admin
    Route::get('/my-room', [ChatController::class, 'getMyRoom']); // customer
    Route::get('/rooms/{room}', [ChatController::class, 'getMessages']);
    Route::post('/messages', [ChatController::class, 'sendMessage']);

    Route::post('/payment/token/{id}', [PaymentController::class, 'getSnapToken']);
    Route::get('/payment/download/{id}', [PaymentController::class, 'download']);

    /**
     * Roles
     */
    Route::get('/roles/search', [RoleController::class, 'search'])->middleware('throttle:400,1');
});
