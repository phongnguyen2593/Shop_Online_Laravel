<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;

use App\Models\UserInfo;
use App\Models\User;
use App\Models\Comment;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.user.index');
    }

    public function update(UpdateUserRequest $request)
    {
        $user = Auth::user();
        $info = UserInfo::where('user_id', $user->id)->first();
        $info->name = $request->get('name');
        $info->phone = $request->get('phone');
        $info->gender = $request->get('gender');
        $info->address = $request->get('address');
        $info->save();
        return \redirect(route('frontend.user.index'));

    }

    public function changePasswordForm()
    {
        return view('frontend.user.change-password');
    }

    public function changePassword(Request $request)
    {
        $id = Auth::user()->id;
        $db_pass = Auth::user()->password;
        $old_pass = $request->old_password;
        $new_pass = $request->new_password;
        $confirm_pass = $request->confirm_password;

        if (Hash::check($old_pass, $db_pass)) {
            if($new_pass === $confirm_pass){
                User::find($id)->update([
                    'password' => Hash::make($new_pass)
                ]);
                Auth::logout();
                return redirect(route('login'));
            }else{
                return redirect()->back()->with('danger', 'Mật khẩu mới không khớp !');
            }
        } else {
            return redirect()->back()->with('error', 'Mật khẩu cũ không đúng !');
        }
        
    }

    public function wishlist()
    {
        return view('frontend.user.wishlist');
    }

    public function storeComment(Request $request, $id)
    {   
        $comment = new Comment();
        $comment->product_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->comment = $request->get('comment');
        $product = $comment->product;
        $success = $comment->save();
        return redirect()->route('frontend.product.detail',$product->slug);
    }
}
