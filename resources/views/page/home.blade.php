<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidail Shop</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lateef:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    @extends('layouts.app')

@section('title', 'صفحه اصلی')

@section('content')
<h2>به ویداییل شاپ خوش آمدید!</h2>
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

