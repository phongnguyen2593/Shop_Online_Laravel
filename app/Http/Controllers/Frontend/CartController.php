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
        $items = Cart::instance('shopping')->content();
        return view('frontend.pages.cart', [
            'items'  => $items,
        ]);
    }

    public function add(Request $request, $id)
    {
        if($request->quantity){
            $qty = $request->quantity;
        }else{
            $qty = 1;
        }
        $product = Product::find($id);
        Cart::instance('shopping')->add($product->id, $product->name, $qty, $product->sale_price, 0, ['thumbnail' => $product->thumbnail]);
        return redirect(route('frontend.index'));
    }

    public function update(Request $request)
    {
        $id = $request->id_item;
        $qty = $request->quantity_item;
        Cart::instance('shopping')->update($id, $qty);
        return redirect(route('frontend.cart.index'));
    }

    public function remove($id){
        Cart::instance('shopping')->remove($id);
        return redirect(route('frontend.cart.index'));
    }
}
