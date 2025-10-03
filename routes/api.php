<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\DealController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContactController;
use Illuminate\Support\Facades\Auth;

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (!Auth::attempt($credentials)) {
        return response()->json(['message' => 'Invalid login'], 401);
    }

    $user = Auth::user();
    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json([
        'user' => $user,
        'token' => $token
    ]);
});


Route::prefix('v1')->group(function () {
    
    // Authentication routes
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    
    // Public product routes
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::get('/products/search/{query}', [ProductController::class, 'search']);
    
    // Public category routes
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{id}', [CategoryController::class, 'show']);
    Route::get('/categories/{id}/products', [CategoryController::class, 'products']);
    
    // Public deals and events
    Route::get('/deals', [DealController::class, 'index']);
    Route::get('/deals/{id}', [DealController::class, 'show']);
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{id}', [EventController::class, 'show']);
    
    // Contact form
    Route::post('/contact', [ContactController::class, 'store']);
    
    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        
        // User profile
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::put('/user/profile', [AuthController::class, 'updateProfile']);
        
        // Cart routes
        Route::get('/cart', [CartController::class, 'index']);
        Route::post('/cart/add', [CartController::class, 'add']);
        Route::put('/cart/update/{id}', [CartController::class, 'update']);
        Route::delete('/cart/remove/{id}', [CartController::class, 'remove']);
        Route::delete('/cart/clear', [CartController::class, 'clear']);
        
        // Order routes
        Route::get('/orders', [OrderController::class, 'index']);
        Route::get('/orders/{id}', [OrderController::class, 'show']);
        Route::post('/orders', [OrderController::class, 'store']);
        Route::put('/orders/{id}/status', [OrderController::class, 'updateStatus']);
        
        // Admin routes
        Route::middleware('admin.api')->group(function () {
            
            // Product management
            Route::post('/admin/products', [ProductController::class, 'store']);
            Route::put('/admin/products/{id}', [ProductController::class, 'update']);
            Route::delete('/admin/products/{id}', [ProductController::class, 'destroy']);
            
            // Category management
            Route::post('/admin/categories', [CategoryController::class, 'store']);
            Route::put('/admin/categories/{id}', [CategoryController::class, 'update']);
            Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy']);
            
            // Deal management
            Route::post('/admin/deals', [DealController::class, 'store']);
            Route::put('/admin/deals/{id}', [DealController::class, 'update']);
            Route::delete('/admin/deals/{id}', [DealController::class, 'destroy']);
            
            // Event management
            Route::post('/admin/events', [EventController::class, 'store']);
            Route::put('/admin/events/{id}', [EventController::class, 'update']);
            Route::delete('/admin/events/{id}', [EventController::class, 'destroy']);
            
            // Order management
            Route::get('/admin/orders', [OrderController::class, 'adminIndex']);
            Route::put('/admin/orders/{id}', [OrderController::class, 'adminUpdate']);
            
            // Contact messages
            Route::get('/admin/contacts', [ContactController::class, 'index']);
            Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy']);
        });
    });
});
