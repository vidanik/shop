<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // استفاده از Session
use App\Models\Product; // اطمینان حاصل کنید که مدل Product را هم وارد کرده‌اید

class CartController extends Controller
{
    public function sabadkharid()
    {
        // دریافت سبد خرید از سشن
        $cart = Session::get('cart', []);
        return view('cart.sabadkharid', compact('cart'));
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id'); // استفاده از input برای دریافت ID محصول
        $cart = Session::get('cart', []);

        // اضافه کردن محصول به سبد خرید
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            // فرض کنید که اطلاعات محصول را از پایگاه داده می‌خوانید
            $product = Product::find($productId);
            if ($product) { // بررسی وجود محصول
                $cart[$productId] = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                ];
            }
        }

        Session::put('cart', $cart);
        return redirect()->route('cart.sabadkharid');
    }

    public function remove(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = Session::get('cart', []);
        
        // حذف محصول از سبد خرید
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        Session::put('cart', $cart);
        return redirect()->route('cart.sabadkharid');
    }
}