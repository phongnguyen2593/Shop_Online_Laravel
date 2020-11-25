<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $user_count = Cache::remember('user_count', 60*60, function () {
            $user_count = User::count();
            return $user_count;
        });

        $order_count = Cache::remember('order_count', 60*60, function () {
            $order_count = Order::count();
            return $order_count;
        });

        $product_count = Cache::remember('product_count', 60*60, function () {
            $product_count = Product::count();
            return $product_count;
        });

        return view('backend.dashboard', [
            'user_count'    => $user_count,
            'order_count'   => $order_count,
            'product_count' => $product_count,
        ]);
    }
}
