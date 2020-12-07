<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\DataTables;

use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use Session;
use File;
use Carbon\Carbon;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Auth::user());
        return view('backend.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Auth::user());
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        $this->authorize('create', Auth::user());
        $brand = new Brand();
        $brand->name = $request->name;
        $file = $request->file('thumbnail');
        $path = Storage::disk('public')->putFileAs('uploads/brands', $file, $file->getClientOriginalName());
        $brand->thumbnail = $path;
        $success = $brand->save();
        if($success){
            Session::flash('success', 'Cập nhật thành công !');
        }
        return redirect(route('backend.brand.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $this->authorize('view', Auth::user());
        return view('backend.brands.show', [
            'brand' => $brand,
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
        //
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
        $brand = Brand::find($id);
        $brand->name = $request->get('name');
        if($request->hasFile('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            File::delete($brand->thumbnail);
            $path = Storage::disk('public')->putFileAs('uploads/brands', $thumbnail, $thumbnail->getClientOriginalName());
            $brand->thumbnail = $path;
        }
        $success = $brand->save();
        if ($success) {
            Session::flash('success', 'Cập nhật thành công !');
            return redirect(route('backend.brand.index'));
        } else {
            Session::flash('error', 'Cập nhật thất bại !');
            return redirect(route('backend.brand.index'));
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $this->authorize('delete', Auth::user());
        try {
            $success = $brand->delete();
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
    }

    public function getData()
    {
        $brands = Brand::orderBy('updated_at', 'DESC')
                            ->get();
        return DataTables::of($brands)
            ->addColumn('thumbnail', function($brand){
                $thumbnail = '<img  src="'. asset($brand->thumbnail) .'" width="130px">';
                return $thumbnail;
            })
            ->addColumn('action', function($brand){
                $actionBtn = '<a href="' . route('backend.brand.show', $brand->id) .'"><button title="Chi tiết" class="btn btn-light waves-effect waves-light m-1"> <i class="fa fa-info-circle"></i> </button></a>
                    <button title="Xóa" class="btn btn-light waves-effect waves-light m-1 btn-delete" data-id="'.$brand->id.'"><i class="fa fa-trash-o"></i> </button>';
                    return $actionBtn;
            })
            ->addColumn('updated_at', function($brand){
                $time = Carbon::parse($brand->updated_at)->isoFormat('lll');
                return $time;
            })
            ->rawColumns(['action', 'thumbnail'])
            ->make(true);

        
    }
}
