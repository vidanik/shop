<!-- resources/views/blog/products.blade.php -->
@extends('layouts.app') <!-- اگر از یک لایه پایه استفاده می‌کنید -->

@section('content')
<header>
    @include('partials.header')
</header>

<main>
    <h1>محصولات</h1>
    <div class="products-container">
        <!-- لیست محصولات شما در اینجا قرار می‌گیرد -->
        <div class="product">
            <h2>محصول 1</h2>
            <p>توضیحاتی درباره محصول 1.</p>
        </div>
        <div class="product">
            <h2>محصول 2</h2>
            <p>توضیحاتی درباره محصول 2.</p>
        </div>
        <div class="product">
            <h2>محصول 3</h2>
            <p>توضیحاتی درباره محصول 3.</p>
        </div>
        <!-- می‌توانید محصولات بیشتری اضافه کنید -->
    </div>
</main>

<footer>
    @include('partials.footer')
</footer>
@endsection