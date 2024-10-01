<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FE\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin');

Route::prefix('category')->group(function () {
    Route::get('{slug}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
});

Route::prefix('news')->group(function () {
    Route::get('{slug}', [NewsController::class, 'show'])->name('news.detail');
});

Route::get("/contact", function () {
    return view('contact');
});

// Route::get("/404", function () {
//     return view('errors.404');
// });