<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class HomeController extends Controller
{ 
    public function index()
    {
        $products = Product::with('sale')->get();
        return view('frontend.home', ['products' => $products]);
    }

    public function category()
    {
        dd('category');
    }

    public function product()
    {
        dd('product');
    }

    public function lookup()
    {
        return view('frontend.lookup');
    }

    public function lookup_action()
    {
        dd($_GET('lookup'));
    }

    public function test()
    {
        // Storage::put('file2.txt', 'Contents');

        // Storage::disk('public')->put('file5.txt', 'File5');

        $url = Storage::url('file5.txt');
        dd($url);
    }
}
