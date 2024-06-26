<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/category/{slug}', [ListingController::class, 'index'])->name('main.category');
Route::get('/sub-category/{subSlug}', [ListingController::class, 'subCategory'])->name('sub.category');

Route::get('/page/{slug}', [LandingPageController::class, 'pageDetail'])->name('page-detail');
require __DIR__.'/auth.php';
