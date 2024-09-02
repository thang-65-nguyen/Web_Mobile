<?php

use App\Http\Controllers\admin\BannersController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\address\ProvincesController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\TruyenController;

use Illuminate\Support\Facades\Route;
// Home
Route::get('/', function () {
    return view('pages.home');
});
// Blog
Route::get('/blog', [BlogController::class, 'showBlogs'])->name('pages.blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('pages.blog.show');
// Banner,nav
Route::get('/', [CategoryController::class, 'show'])->name('partials.banners');
// Login
Route::get('/login', function () {
    return view('pages.auth.login.index');
});
// Register
Route::get('/register', function () {
    return view('pages.auth.register.index');
});
// 
Route::get('truyen/create', [TruyenController::class, 'create'])->name('backend.truyen.create');
Route::post('truyen', [TruyenController::class, 'store'])->name('backend.truyen.store');
// Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/product', function () {
    return view('admin.product');
})->name('admin.product');
Route::get('/admin/product/create', function () {
    return view('admin.product.create');
})->name('admin.product');
Route::prefix('admin')->group(function () {
    Route::resource('/brand', BrandController::class); 
    Route::resource('/category', CategoryController::class);
    Route::resource('/banner', BannersController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('/provinces', ProvincesController::class);
    // Route::resource('/product', CategoryController::class);
});
