<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarouselController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/promo', [LandingController::class, 'showPromo'])->name('landing.showPromo');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        });

        Route::resource('promo', PromoController::class);
        Route::resource('carousel', CarouselController::class);
        Route::resource('order', OrderController::class);
        Route::resource('post', PostController::class);
            // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
