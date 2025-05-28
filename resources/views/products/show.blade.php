<!-- resources/views/product/show.blade.php -->

@extends('layouts.app') <!-- فرض بر این است که شما یک قالب اصلی دارید -->

@section('content')
<div class="container">
    <div class="product-detail">
        <h1>{{ $product->name }}</h1>
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
        <p>{{ $product->description }}</p>
        <p>قیمت: {{ number_format($product->price) }} تومان</p>

        <form action="{{ route('cart.add', $product->id) }}" method="POST"> <!-- فرض بر این است که مسیری برای افزودن به سبد خرید دارید -->
            @csrf
            <button type="submit" class="buy-link">افزودن به سبد خرید</button>
        </form>
    </div>
</div>
@endsection
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif