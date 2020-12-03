<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

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
        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->gender   = $request->get('gender');
        $user->role     = 3;
        $user->phone    = $request->get('phone');
        $user->address  = $request->get('address');
        $user->save();
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
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email    = $request->get('email');
        $user->gender   = $request->get('gender');
        $user->phone    = $request->get('phone');
        $user->address  = $request->get('address');
        $user->save();
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
        $model = User::find($id);

         try {
            $success = $model->delete();
    
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
                if ($user->gender == 1) {
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


    // public function lock($id)
    // {
    //     $this->authorize('update', Auth::user());
    //     $user = User::find($id);
    //     $user->role = 0;
    //     $user->save();
    //     return \redirect()->route('backend.user.index');
    // }
}
