<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);
        return view('frontend.products.index',['products' => $products]);
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $relatedProduct = Product::where('category_id', $product->category_id)->get();
        return view('frontend.products.detail', [
            'product'   => $product,
            'relatedProduct'   => $relatedProduct,
        ]);
    }
}
