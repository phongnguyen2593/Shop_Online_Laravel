<?php
 namespace App\Http\ViewComposers;

 use Illuminate\View\View;
 use Illuminate\Support\Facades\Cache;
 use App\Models\Brand;

 class BrandComposer
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
        $allBrands = Cache::remember('allBrands', 10, function () {
            return Brand::all();
        });

        $randBrands = Brand::inRandomOrder()->limit(8)->get();
        $view->with([
            'allBrands'     => $allBrands,
            'randBrands'    => $randBrands,
            ]);
     }
 }