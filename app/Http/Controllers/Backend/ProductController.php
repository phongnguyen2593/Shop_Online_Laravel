<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\Sale;
use App\Models\User;


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
            $products = Product::orderBy('updated_at', 'DESC')
                                ->with(['sale', 'category', 'user'])
                                ->get();
            return view('backend.products.index', ['products' => $products]);
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
            $categories = Category::get();
            return view('backend.products.create', ['categories' => $categories]);
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
        $product = new Product();
        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->quantity = $request->get('quantity');
        $product->category_id = $request->get('category_id');
        $file = $request->file('thumbnail');
        $path = Storage::disk('public')->putFileAs('thumbnail_product', $file, $file->getClientOriginalName());
        $product->thumbnail = $path;
        $product->description = $request->get('description');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->save();

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image){
                $path = Storage::disk('public')->putFileAs('product_images', $image, $image->getClientOriginalName());
                $image = new Image();
                $image->path = $path;
                $image->product_id = $product->id;
                $image->save();
            }
        }

        $sale = new Sale();
        $sale->product_id = $product->id;
        $sale->origin_price = $request->origin_price;
        $sale->sale_price = $request->sale_price;
        $sale->discount_percent = $request->discount_percent;
        $sale->save();

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
            $categories = Category::get();
            return view('backend.products.edit', [
                'product'       => $product,
                'categories'    => $categories,
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
    public function update(StoreProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->quantity = $request->get('quantity');
        $product->category_id = $request->get('category_id');
        // $product->origin_price = $request->get('origin_price');
        // $product->sale_price = $request->get('sale_price');
        // $product->discount_percent = $request->get('discount_percent');
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->save();

        return redirect()->route('backend.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $user = Auth::user();
        if ($user->can('delete', $product)) {
            try {
                $success = $product->delete();
    
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
            return redirect()->route('backend.product.index');
        }
        
        
    }
}
