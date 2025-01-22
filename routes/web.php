<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Models\Subscription;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;


Route::get('/', function () {
    return view('home');
});
Route::get('/home' , [SubscriptionController::class, 'index'], 
)->name('home');

Route::get('/shop', [ShopController::class, 'shopIndex'])->name('shop');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/subscribe/{id}', [SubscriptionController::class, 'subscribe'])->name('subscribe');
    
});

require __DIR__ . '/auth.php';
