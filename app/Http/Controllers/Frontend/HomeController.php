<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Order;
use Carbon\Carbon;
use Session;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{ 
    public function index()
    {
        $products = Product::all();
        $brands = Brand::inRandomOrder()->limit(10)->get();
        return view('frontend.home', [
            'products'  => $products,
            'brands'    => $brands,        
            ]);
    }

    public function search(Request $request)
    {
        $key = $request->key;
        $products = Product::where('name', 'like', '%'.$key.'%')->get();
        return view('frontend.pages.search-result', [
            'key'       => $key,
            'products'  => $products,
        ]);
    }
    public function category()
    {
        dd('category');
    }

    public function tracking(Request $request)
    {
        $order_code = $request->code;
        $order = Order::where('code', 'like', $order_code)->first();
        $total = 0;
        foreach ($order->products as $product) {
            $total += $product->pivot->quantity * $product->pivot->sale_price;
        }
        switch ($order->status) {
            case '1':
                Session::flash('success', 'Đơn hàng đang chờ xác nhận.');
                break;
            case '2':
                Session::flash('success', 'Đơn hàng đã được xác nhận.');
                break;
            case '3':
                Session::flash('success', 'Đơn hàng đã được hoàn thành.');
                break;
        }
        if ($order==null) {
            Session::flash('error', 'Vui lòng kiểm tra lại mã đơn hàng');
        }elseif ($order->status == 0) {
            Session::flash('error', 'Đơn hàng đã bị hủy bới người đặt hoặc cửa hàng.');
        }
        
        return view('frontend.pages.tracking', [
            'order'     => $order,
            'total'     => $total,
        ]);
    }

    public function contact()
    {
        $user = Auth::user();
        return view('frontend.pages.contact', ['user' => $user]);
    }

    public function shipping()
    {
        return view('frontend.pages.shipping');
    }

    public function test(Request $request)
    {
        // 
    }
}
