<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\Role;
use File;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Auth::user());    
        return view('backend.users.index');
        
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
    public function store(StoreUserRequest $request)
    {

        $this->authorize('create', Auth::user());

        $user = new User();
        $user->email    = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        $info = new UserInfo();
        $info->user_id  = $user->id;
        $info->name     = ucwords($request->get('name'));
        $info->gender   = $request->get('gender');
        $info->phone    = $request->get('phone');
        $info->address  = $request->get('address');
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $path = Storage::disk('public')->putFileAs('uploads/users/avatars', $file, $file->getClientOriginalName());
            $info->avatar = $path;
        }else{
            $info->avatar = 'uploads/users/avatar/usdcvhvbsb82345637846534.png';
        }
        $info->save();

        $role = new Role();
        $role->user_id = $user->id;
        $role->save();
        Session::flash('success', 'Tạo mới thành công !');

        return redirect()->route('backend.user.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view', Auth::user());

        $user = User::find($id);
        return view('backend.users.show', [
            'user'  => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', Auth::user());
        $user = User::find($id);

        return view('backend.users.edit', [
                'user'       => $user,
            ]);
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
        $this->authorize('update', Auth::user());
        try {
            
            $user = User::find($id);

            if ($user->status == 1) {
                $user->status = 0;
            } else{
                $user->status = 1;
            }
            $success = $user->save();
            if($success){
                return response()->json([
                    'error'=>false,
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'error'=>true,
            ]);
        }
        
        return \redirect()->route('backend.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Auth::user());
        $user = User::find($id);

         try {
            $success = $user->delete();
    
        }catch (\Exception $e){
            $message = "Xóa không thành công";
            return response()->json([
                    'error'=>true,
                    'message'=>$e->getMessage(),
                ]);
            }
    }

    

    public function getData()
    {
        $users = User::orderBy('updated_at', 'DESC')
                        ->with('role')
                        ->get();
        return Datatables::of($users)
            ->addColumn('name', function(User $user){
                return $user->info->name;
            })
            ->addColumn('role', function(User $user){
                if ($user->role->role == 1) {
                    return 'Admin';
                } elseif($user->role->role == 2) {
                    return 'Moderator';
                }else{
                    return 'User';
                }
            })
            ->addColumn('gender', function(User $user){
                if ($user->info->gender == 1) {
                    return 'Nam';
                } else {
                    return 'Nữ';
                }
            })
            ->addColumn('action', function($user){
                $actionBtn = '<a href="' . route('backend.user.show', $user->id) .'"><button title="Chi tiết" class="btn btn-light waves-effect waves-light m-1"> <i class="fa fa-info-circle"></i> </button></a>
                <a href="'. route('backend.user.edit', $user->id) .'"><button title="Chỉnh sửa" class="btn btn-light waves-effect waves-light m-1"> <i class="fa fa-pencil-square-o"></i> </button></a>
                <button title="Xóa" class="btn btn-light waves-effect waves-light m-1 btn-delete" data-id="'.$user->id.'"><i class="fa fa-trash-o"></i> </button>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        
    }
}
