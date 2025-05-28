<!-- resources/views/cart/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>سبد خرید</h1>
    
    @if (empty($cart))
        <p>سبد خرید شما خالی است.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>محصول</th>
                    <th>قیمت</th>
                    <th>تعداد</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $id }}">
                                <button type="submit">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection