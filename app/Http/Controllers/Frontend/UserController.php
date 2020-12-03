<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.user.index');
    }

    public function edit($id)
    {
        //
    }

    public function update(Reques $request, $id)
    {
        //
    }

    public function wishlist()
    {
        return view('frontend.user.wishlist');
    }

    public function form_change_password()
    {
        dd('form change password');
    }

    public function change_password(Request $request, $id)
    {
        //
    }

    public function order_history($id)
    {
        //
    }
}
