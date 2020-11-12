<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info($id)
    {
        dd('info user ' . $id);
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
        dd('wish list ' . $id);
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
