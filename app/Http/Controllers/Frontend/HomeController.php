<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function category()
    {
        dd('category');
    }

    public function product()
    {
        dd('product');
    }

    public function test()
    {
        // Storage::put('file2.txt', 'Contents');

        // Storage::disk('public')->put('file5.txt', 'File5');

        $url = Storage::url('file5.txt');
        dd($url);
    }
}
