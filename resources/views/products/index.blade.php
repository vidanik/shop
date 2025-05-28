

@extends('layouts.app') <!-- فرض می‌کنیم هدر و فوتر شما در این لایه است -->

@section('content')
<h1>محصولات ما</h1>
<div class="product-list">
    @foreach($products as $product)
        <div class="product">
            <h2>{{ $product->name }}</h2>
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
            <p>{{ $product->description }}</p>
            <p>قیمت: {{ number_format($product->price) }} تومان</p>
            <a href="#" class="buy-link">خرید کنید</a>
        </div>
    @endforeach
</div>
@endsection