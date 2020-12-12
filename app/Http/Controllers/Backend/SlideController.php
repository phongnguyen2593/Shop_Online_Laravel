<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    public function index()
    {
        return view('backend.slides.index');
    }

    public function create()
    {
        return view('backend.slides.create');
    }

    public function store(Request $request)
    {
        return view('frontend.slides.index');
    }

    public function delete()
    {
        return view('frontend.slides.index');
    }
}
