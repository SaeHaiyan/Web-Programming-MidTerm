<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminCustomerController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Resource routes for customers, rentals, and games
Route::resource('customers', CustomerController::class);
Route::resource('rentals', RentalController::class);
Route::resource('games', GameController::class);

require __DIR__.'/auth.php';

// Admin page routes
Route::middleware(['auth', 'admin'])->group(function (){

    Route::get('admin/dashboard', [AdminHomeController::class, 'index']);

    Route::resource('admin/customers1', AdminCustomerController::class, 
    [
        'as' => 'admin',
        'parameters' => ['customers1' => 'customer']
    ]);
    Route::resource('rentals1', RentalController::class);
    Route::resource('admin/games1', GameController::class, 
    [
        'as' => 'admin',
        'parameters' => ['games1' => 'game']
    ]);

});


