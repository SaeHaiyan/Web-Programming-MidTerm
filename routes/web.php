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

    // Admin customer routes
    Route::get('admin/customers1', [AdminCustomerController::class, 'index'])->name('admin.customers1.index'); // Display all customers
    Route::get('admin/customers1/create', [AdminCustomerController::class, 'create'])->name('admin.customers1.create'); // Display customer creation form
    Route::post('admin/customers1', [AdminCustomerController::class, 'store'])->name('admin.customers1.store'); // Store new customer
    
    // Display a specific customer (GET instead of POST)
    Route::get('admin/customers1/show/{id}', [AdminCustomerController::class, 'show'])->name('admin.customers1.show');

    // Edit customer form (GET instead of POST and proper slash)
    Route::get('admin/customers1/edit/{id}', [AdminCustomerController::class, 'edit'])->name('admin.customers1.edit');
    
    // Update customer (PUT/PATCH instead of POST)
    Route::put('admin/customers1/update/{id}', [AdminCustomerController::class, 'update'])->name('admin.customers1.update');

    // Delete customer (with ID parameter)
    Route::delete('admin/customers1/destroy/{id}', [AdminCustomerController::class, 'destroy'])->name('admin.customers1.destroy');
});


