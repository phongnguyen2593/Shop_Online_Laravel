<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Slide;
use Session;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('updated_at', 'DESC')->get();
        return view('backend.slides.index', ['slides' => $slides]);
    }

    public function create()
    {
        return view('backend.slides.create');
    }

    public function store(Request $request)
    {
        $slide = new Slide();
        $file = $request->file('thumbnail');
        $path = Storage::disk('public')->putFileAs('uploads/slides', $file, $file->getClientOriginalName());
        $slide->path = $path;
        $success = $slide->save();
        if($success){
            Session::flash('success', 'Cập nhật thành công !');
        }
        return redirect(route('backend.slide.index'));
    }

    public function delete()
    {
        return view('frontend.slides.index');
    }
}
