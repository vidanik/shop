<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
}
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // دریافت همه محصولات
        return view('products.index', compact('products')); // ارسال به ویو
    }
}


// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product; // فرض بر این است که مدل Product وجود دارد
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id); // دریافت محصول با ID مشخص

        return view('product.show', compact('product')); // ارسال محصول به نمای
    }
}