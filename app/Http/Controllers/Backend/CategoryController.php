<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->can('viewAny', Category::class)) {
            $categories = Category::orderBy('created_at', 'DESC')->get();
            return view('backend.categories.index', ['categories' => $categories]);
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

        if ($user->can('create', Category::class)) {
            return view('backend.categories.create');
        } else {
            return redirect()->route('backend.category.index');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->authorize('create', Auth::user());
        $parent = Category::find($request->get('parent_id'));
        $category = new Category();
        $category->name = $request->get('name');
        $category->slug = Str::slug($request->get('name'));
        if (isset($parent)) {
            $category->depth = $parent->depth + 1;
        } else {
            $category->depth = 1;
        }


        $file = $request->file('thumbnail');
        $path = Storage::disk('public')->putFileAs('uploads/products/images', $file, $file->getClientOriginalName());
        $category->thumbnail = $path;
        $category->save();

        return redirect()->route('backend.category.index');
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

        $category = Category::find($id);

        return view('backend.categories.show', [
            'category'  => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $this->authorize('update', Auth::user());

        $categories = Category::get();
        return view('backend.categories.edit', [
            'category' => $category,
            'categories' => $categories
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $this->authorize('view', Auth::user());

        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->slug = Str::slug($request->get('name'));
        $category->parent_id = $request->get('parent_id');
        $category->save();

        return redirect()->route('backend.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $category = Category::find($id);
        dd($category);
    //     $user = Auth::user();

    //     if ($user->can('delete', $category)) {
    //         try {
    //             $category = Category::find($id);
    //             $success = $category->delete();
    
    //             if($success){
    //                 return response()->json([
    //                     'error'=>false,
    //                     'message'=>"Đã xóa",
    //                 ]);
    //                 location.reload();
    //             }
    
    //         }catch (\Exception $e){
    //             $message = "Xóa không thành công";
    //             return response()->json([
    //                 'error'=>true,
    //                 'message'=>$e->getMessage(),
    //             ]);
    //         }
    //     } else {
    //         return redirect()->route('backend.category.index');
    //     }
    }

    public function getData()
    {
        $categories = Category::orderBy('updated_at', 'DESC')
                                ->get();

        return DataTables::of($categories)
                ->addColumn('thumbnail', function($category){
                    $thumbnail = '<img  src="'. asset($category->thumbnail) .'" width="70%">';
                    return $thumbnail;
                })
                ->addColumn('parent', function($category){
                    if($category->parent_id != 0){
                        return $category->parent->name;
                    }else {
                        return '-';
                    }
                })
                ->addColumn('action', function($category){
                    $actionBtn = '<a href="' . route('backend.category.show', $category->id) .'"><button title="Chi tiết" class="btn btn-light waves-effect waves-light m-1"> <i class="fa fa-info-circle"></i> </button></a>
                    <a href="'. route('backend.category.edit', $category->id) .'"><button title="Chỉnh sửa" class="btn btn-light waves-effect waves-light m-1"> <i class="fa fa-pencil-square-o"></i> </button></a>
                    <button title="Xóa" class="btn btn-light waves-effect waves-light m-1 btn-delete" data-id="'.$category->id.'"><i class="fa fa-trash-o"></i> </button>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'thumbnail'])
                ->make(true);
    }
}
