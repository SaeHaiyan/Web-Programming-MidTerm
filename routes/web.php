<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminGameController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminRentalController;
use App\Http\Controllers\AdminCustomerController;

// Authentication routes
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Resource routes for customers, rentals, and games
Route::resource('customers', CustomerController::class);
Route::resource('rentals', RentalController::class);
Route::resource('games', GameController::class);

// New pages routes
Route::get('/cookies-policy', function () {
    return view('cookies-policy'); // Ensure this view exists
})->name('cookies-policy');

Route::get('/legal-terms', function () {
    return view('legal-terms'); // Ensure this view exists
})->name('legal-terms');

Route::get('/privacy-policy', function () {
    return view('privacy-policy'); // Ensure this view exists
})->name('privacy-policy');

// routes/web.php

Route::get('/about-us', function () {
    return view('about-us'); // Return the about-us view directly
})->name('about-us');


require __DIR__.'/auth.php';

// Admin page routes
Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('admin/dashboard', [AdminHomeController::class, 'index']);

    Route::resource('admin/customers1', AdminCustomerController::class, 
    [
        'as' => 'admin',
        'parameters' => ['customers1' => 'customer']
    ]);

    Route::resource('rentals1', AdminRentalController::class,
    [
        'as' => 'admin',
        'parameters' => ['rentals1' => 'rental']
    ]);

    Route::resource('admin/games1', AdminGameController::class, 
    [
        'as' => 'admin',
        'parameters' => ['games1' => 'game']
    ]);

    
});
