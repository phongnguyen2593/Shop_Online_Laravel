<?php
 namespace App\Http\ViewComposers;

 use Illuminate\View\View;
 use App\Models\Product;

 class ProductComposer
 {
     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {
        //
     }

     /**
      * Bind data to the view.
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {
        $allProducts = Product::all();
        $newProducts = Product::orderBy('created_at', 'DESC')->take(10)->get();
        $view->with([
            'allProducts' => $allProducts,
            'newProducts'    => $newProducts,
            ]);
     }
 }