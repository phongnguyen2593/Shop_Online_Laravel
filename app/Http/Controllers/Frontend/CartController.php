<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $item = Cart::content();
        // dd($item);
        return view('frontend.pages.cart', [
            'item'  => $item,
        ]);
    }

    public function add($id)
    {
        $product = Product::find($id);
        Cart::add($product->id, $product->name, 1, $product->sale->sale_price, 0);
        return redirect(route('frontend.index'));
    }

    public function remove($id){
        Cart::remove($id);
        return redirect(route('frontend.cart.index'));
    }
}
