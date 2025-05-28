<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('page.home');
});



Route::get('/blog/products', function () {
    return view('blog.products'); // صفحه محصولات را بارگذاری می‌کند
});

Route::get('/blog/products', function () {
    return view('blog.products'); // صفحه محصولات را بارگذاری می‌کند
});


// صفحه اصلی
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// صفحه محصولات
Route::get('/blog/products', [ProductController::class, 'index']);

//سبدخرید
use App\Http\Controllers\CartController;

Route::get('/sabadkharid', [CartController::class, 'sabadkharid'])->name('cart.sabadkharid');

// نمایش محصولا

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// routes/web.php

// use App\Http\Controllers\Auth\RegisterController;

// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
// Route::post('register', [RegisterController::class, 'register'])->name('auth.register.post');




// // روت‌های ثبت‌نام
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
// Route::post('register', [RegisterController::class, 'register'])->name('auth.register.post');

// // روت‌های تأیید کد
// Route::get('verify', [RegisterController::class, 'showVerificationForm'])->name('auth.verify');
// Route::post('verify', [RegisterController::class, 'verify'])->name('auth.verify.post');