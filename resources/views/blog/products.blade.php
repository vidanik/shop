<!-- resources/views/blog/products.blade.php -->
@extends('layouts.app') <!-- اگر از یک لایه پایه استفاده می‌کنید -->

@section('content')
<header>
    @include('partials.header')
</header>

     @extends('layouts.app') <!-- فرض می‌کنیم هدر و فوتر شما در این لایه است -->

@section('content')
<header>
    @include('partials.header')
</header>

<main>
   @extends('layouts.app')

@section('title', 'محصولات')

@section('content')
<main>
    <h1>محصولات</h1>
    <div class="products-container">
        @foreach($products as $product)
            <div class="product">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>قیمت: {{ number_format($product->price) }} تومان</p>
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
            </div>
        @endforeach
    </div>
</main>
@endsection
    </div>
</main>

<footer>
    @include('partials.footer')
</footer>
@endsection
<