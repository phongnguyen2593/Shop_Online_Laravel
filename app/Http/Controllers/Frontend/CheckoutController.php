<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use Carbon\Carbon;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
        $items = Cart::instance('shopping')->content();
        return view('frontend.pages.check-out', [
            'items' => $items,
        ]);
    }

    public function store(Request $request)
    {
        $items = Cart::instance('shopping')->content();
        $total = Cart::instance('shopping')->total();

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        if(Auth::user()){
            $customer->user_id = Auth::user()->id;
        }else{
            $customer->user_id = 0;
        }
        $customer->save();

        $order = new Order();
        $order->code = str_replace('-', '', Carbon::now()->toDateString()) . '-' . rand();
        $order->customer_id = $customer->id;
        $order->approver_id = 0;
        $order->payment = 1;
        $order->status = 1;
        $order->note = $request->note;
        $success = $order->save();

        foreach ($items as $item) {
            $order->products()->attach($item->id, [
                'quantity' => $item->qty,
                'sale_price' => $item->price,
            ]);
        }

        $order_product = $order->products;
        if($success){
            Cart::instance('shopping')->destroy();
            Session::flash('success', 'Cảm ơn bạn đã đặt hàng. Đơn hàng của bạn đang chờ xác nhận.');
        }

        return view('frontend.pages.success',[
            'order'         => $order,
            'order_product' => $order_product,
            'total'         => $total,
        ]);

    }
}
