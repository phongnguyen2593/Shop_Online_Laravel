<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->can('viewAny', User::class)) {
            $users = User::orderBy('updated_at', 'DESC')
                                ->get();
            return view('backend.users.index', ['users' => $users]);
        } else {
            return redirect()->route('frontend.index');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        if ($user->can('create', User::class)) {
            return view('backend.users.create');
        } else {
            return redirect()->route('frontend.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $model = User::find($id);

        if ($user->can('update', $model)) {
            return view('backend.users.edit', [
                'model'       => $model,
                ]);
        }else {
            return redirect()->route('backend.user.index');
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $model = User::find($id);

        if ($user->can('delete', $model)) {
            try {
                $success = $model->delete();
    
                if($success){
                    return response()->json([
                        'error'=>false,
                        'message'=>"Đã xóa",
                    ]);
                    location.reload();
                }
    
            }catch (\Exception $e){
                $message = "Xóa không thành công";
                return response()->json([
                    'error'=>true,
                    'message'=>$e->getMessage(),
                ]);
            }
        } else {
            return redirect()->route('backend.user.index');
        }
        
    }
}
