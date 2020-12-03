<?php
 namespace App\Http\ViewComposers;

 use Illuminate\View\View;
 use Illuminate\Support\Facades\Cache;
 use App\Models\Category;

 class CategoryComposer
 {
     public $listCategory = [];
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
        $allCategories = Cache::remember('allCategories', 10, function () {
            return Category::all();
        });
        $categories = Cache::remember('categories', 10, function () {
            return Category::where('parent_id', 0)->get();
        });
        $view->with([
            'allCategories' => $allCategories,
            'categories'    => $categories,
            ]);
     }
 }