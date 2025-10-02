<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Admin Controllers
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;

// Other Controllers
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

// Normal user login page (force logout if admin)
Route::get('/login', function () {
    if (auth()->check() && auth()->user()->is_admin) {
        Auth::logout();
    }
    return view('auth.login'); 
})->name('login');

// Customer dashboard (protected)
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard', function () {
            $user = auth()->user();
            if ($user->is_admin) {
                return redirect()->route('admin.dashboard');
            }
            return view('dashboard');
        })->name('dashboard');
    });

// API user endpoint
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Admin login page (force logout normal user)
Route::get('/login/admin', function () {
    if (auth()->check() && !auth()->user()->is_admin) {
        Auth::logout();
    }
    return view('admin.login');
})->name('admin.login');

// Admin login POST handled by Fortify
Route::post('/login/admin', [AuthenticatedSessionController::class, 'store'])
    ->name('admin.login.submit');

// Shop & Products for customers
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{category}', [ShopController::class, 'category'])->name('shop.category');
Route::get('/product/{slug}', [ShopController::class, 'show'])->name('product.show');

// Admin routes (protected by auth + admin middleware)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Products CRUD
    Route::resource('products', ProductController::class);

    // Users CRUD
    Route::resource('users', UserController::class);

    // Events CRUD
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);

    // Deals CRUD
    Route::resource('deals', \App\Http\Controllers\Admin\DealController::class);

    // Messages CRUD
    Route::resource('messages', \App\Http\Controllers\Admin\MessageController::class);

    // Orders page (Livewire table)
    Route::get('/orders', function () {
        return view('admin.orders.index');
    })->name('orders.index');

});

// Static pages
Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{category}', [ShopController::class, 'category'])->name('shop.category');
Route::get('/product/{id}', [ShopController::class, 'show'])->name('shop.show'); // <-- add this




Route::get('/contact', function () {
    return view('contact');
})->name('contact.index');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



Route::get('/discover', [DiscoverController::class, 'index'])->name('discover.index');
// Order success route (show order)
Route::get('/orders/{id}', function ($id) {
    $order = \App\Models\Order::with('items')->findOrFail($id);
    return view('orders.show', compact('order'));
})->name('orders.show');

// User orders page
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/orders', function () {
        return view('orders.index');
    })->name('orders.index');
});

// Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Checkout routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
});
