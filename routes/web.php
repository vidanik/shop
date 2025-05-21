<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('page.home');
});



Route::get('/blog/products', function () {
    return view('blog.products'); // صفحه محصولات را بارگذاری می‌کند
});