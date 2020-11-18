<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\User;

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
            $categories = Category::orderBy('name', 'ASC')->get();
            return view('backend.categories.create', ['categories' => $categories]);
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
        $category = new Category();
        $category->name = $request->get('name');
        $category->slug = Str::slug($request->get('name'));
        $category->parent_id = $request->get('parent_id');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $user = Auth::user();

        if ($user->can('update', $category)) {
            $categories = Category::get();
            return view('backend.categories.edit', [
                'category' => $category,
                'categories' => $categories
                ]);
        } else {
            return redirect()->route('backend.category.index');
        }
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
    public function destroy(Category $category)
    {   
        $user = Auth::user();

        if ($user->can('delete', $category)) {
            try {
                $success = $category->delete();
    
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
            return redirect()->route('backend.category.index');
        }
    }
}
