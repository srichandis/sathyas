<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - SATHYAS CATERING
|--------------------------------------------------------------------------
*/

// Public Pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/process', [ProcessController::class, 'index'])->name('process');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Enquiry / Quote Form
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

// Authenticated User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/enquiry/{enquiry}', [EnquiryController::class, 'show'])->name('enquiry.show');
    Route::delete('/enquiry/{enquiry}', [EnquiryController::class, 'destroy'])->name('enquiry.destroy');

    // Breeze Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::delete('/enquiry/{enquiry}', [AdminController::class, 'destroy'])->name('enquiry.delete');
});

require __DIR__.'/auth.php';
