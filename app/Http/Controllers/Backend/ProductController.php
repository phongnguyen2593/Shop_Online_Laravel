<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Sale;
use App\Models\User;
use File;
use Session;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->can('viewAny', Product::class)) {
            return view('backend.products.index');
        } else {
            return redirect(route('frontend.index'));
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
        if ($user->can('create', Product::class)){
            return view('backend.products.create');
        }else {
            return redirect(route('frontend.index'));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $this->authorize('create', Auth::user());
        $product = new Product();
        $product->name = ucwords($request->get('name'));
        $product->slug = Str::slug($request->get('name'));
        $product->quantity = $request->get('quantity');
        $product->category_id = $request->get('category_id');
        $product->brand_id = $request->get('brand_id');
        $file = $request->file('thumbnail');
        $path = Storage::disk('public')->putFileAs('uploads/products/thumbnail', $file, $file->getClientOriginalName());
        $product->thumbnail = $path;
        $product->description = $request->get('description');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->save();
        
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image){
                $path = Storage::disk('public')->putFileAs('uploads/products/images', $image, $image->getClientOriginalName());
                $image = new Image();
                $image->path = $path;
                $image->product_id = $product->id;
                $image->save();
            }
        }

        $sale = new Sale();
        $sale->product_id = 12;
        $sale->origin_price = $request->get('origin_price');
        $sale->sale_price = $request->get('sale_price');
        if(empty($request->discount_percent)){
            $sale->discount_percent = 0;
        }else{
            $sale->discount_percent = $request->get('discount_percent');
        }
        $sale->save();
        Session::flash('success', 'Tạo mới thành công !');
        return redirect()->route('backend.product.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $user = Auth::user();

        if ($user->can('view', $product)){
            $images = $product->images()->get();
            return view('backend.products.show', [
                'product'   => $product,
                'images'    => $images
                ]);
        }else {
            return redirect(route('frontend.index'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
        $user = Auth::user();

        if ($user->can('update', $product)) {
            $sale = $product->sale;
            return view('backend.products.edit', [
                'product'       => $product,
                'sale'          => $sale,
                ]);
        }else {
            return redirect()->route('backend.product.index');
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $this->authorize('update', Auth::user());
        $product = Product::find($id);
        $product->name = ucwords($request->get('name'));
        $product->slug = Str::slug($request->get('name'));
        $product->quantity = $request->get('quantity');
        $product->category_id = $request->get('category_id');
        $product->description = $request->get('description');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->save();

        $sale = Sale::where('product_id', $id)->first();
        $sale->origin_price = $request->get('origin_price');
        $sale->sale_price = $request->get('sale_price');
        $sale->discount_percent = $request->get('discount_percent');
        $sale->save();
        Session::flash('success', 'Cập nhật thành công !');
        return redirect()->route('backend.product.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete', Auth::user());
        try {
            $success = $product->delete();
            if($success){
                return response()->json([
                    'error'=>false,
                ]);
            }
    
        }catch (\Exception $e){
            return response()->json([
                'error'=>true,
            ]);
        }
        
    }

    public function trash()
    {
        return view('backend.products.trash');  
    }

    public function restoreProduct($id)
    {
        $this->authorize('restore', Auth::user());
        $product = Product::withTrashed()->find($id)->restore();
        dd('ok');
    }
    
    public function forceDeleteProduct($id)
    {
        $this->authorize('delete', Auth::user());
        try {
            $product = Product::onlyTrashed()->find($id);
            $sale = $product->sale;
            if(!empty($product->images)){
                $images = Image::where('product_id', $id)->get();
                foreach ($images as $image) {
                    File::delete($image->path);
                    $image->forceDelete();
                }
            }
            $sale->forceDelete();
            File::delete($product->thumbnail);
            $success = $product->forceDelete();
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
        $products = Product::orderBy('updated_at', 'DESC')
                            ->get();
        return DataTables::of($products)
            ->addColumn('thumbnail', function($product){
                $thumbnail = '<img  src="'. asset($product->thumbnail) .'" width="100%">';
                return $thumbnail;
            })
            ->addColumn('category', function($product){
                return $category = $product->category->name;
            })
            ->addColumn('action', function($product){
                $actionBtn = '<a href="' . route('backend.product.show', $product->id) .'"><button title="Chi tiết" class="btn btn-light waves-effect waves-light m-1"> <i class="fa fa-info-circle"></i> </button></a>
                    <button title="Xóa" class="btn btn-light waves-effect waves-light m-1 btn-delete" data-id="'.$product->id.'"><i class="fa fa-trash-o"></i> </button>';
                    return $actionBtn;
            })
            ->rawColumns(['action', 'thumbnail'])
            ->make(true);

        
    }

    public function trashData()
    {
        $products = Product::onlyTrashed()
                            ->orderBy('updated_at', 'DESC')
                            ->get();
        return DataTables::of($products)
            ->addColumn('thumbnail', function($product){
                $thumbnail = '<img  src="'. asset($product->thumbnail) .'" width="100%">';
                return $thumbnail;
            })
            ->addColumn('category', function($product){
                return $category = $product->category->name;
            })
            ->addColumn('action', function($product){
                $actionBtn = '<button title="Khôi phục" class="btn btn-light waves-effect waves-light m-1 btn-restore" data-id="'.$product->id.'"> <i class="fa fa-info-circle"></i> </button>
                    <button title="Xóa" class="btn btn-light waves-effect waves-light m-1 btn-delete" data-id="'.$product->id.'"><i class="fa fa-trash-o"></i> </button>';
                    return $actionBtn;
            })
            ->rawColumns(['action', 'thumbnail'])
            ->make(true);

        
    }
}
