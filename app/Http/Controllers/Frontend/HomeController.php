<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
// use Carbon\Carbon;

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
        // $year =Carbon::now()->year;
        // $day = Carbon::now()->day;
        // $dt= $day . $year . '-' . 'hsdgfhgsd';
        // return $dt;
        
        $categories = Category::get();
        $products = Product::with('sale')->get();
        return view('frontend.home', [
            'products' => $products,
            'categories' => $categories
            ]);
    }

    public function category()
    {
        dd('category');
    }

    public function product()
    {
        dd('product');
    }

    public function tracking()
    {
        return view('frontend.pages.tracking');
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
        // Storage::put('file2.txt', 'Contents');

        // Storage::disk('public')->put('file5.txt', 'File5');

        // $url = Storage::url('file5.txt');
        // dd($url);

        // $cookie = cookie('hello', '123123123', 1);
        // Cookie::queue('lalala', '23232323', 30);
        // return 1;
        // $value = $request->cookie('lalala');
        // $value = Cookie::get('lalala');
        // return response('Helloworld')->cookie($cookie);
        // dd($value);
        
        // Cache::put('categories', 'ahahaha', 30);
        
        // $value = Cache::get('categories');
        // dd($value);
        // return 1;

        // $categories = Category::get();
        // dd($categories);
        // Cache::put('categories', $categories, 300);
        // $categories = Cache::get('categories');
        // dd($categories);

        if (!Cache::has('categories')) {
            $categories = Category::get();
            Cache::put('categories', $categories, 1);
        }
        $categories = Cache::get('categories');
        dd($categories);
    }
}
