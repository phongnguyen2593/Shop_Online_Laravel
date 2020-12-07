<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            [
                'frontend.includes.header',
                'backend.products.show',
                'backend.products.create',
                'backend.products.edit',
                'backend.categories.show',
                'backend.categories.create',
                'backend.categories.edit',
            ],
            'App\Http\ViewComposers\CategoryComposer'
        );

        view()->composer(
            [
                'frontend.home',
                'backend.products.index',
            ],
            'App\Http\ViewComposers\ProductComposer'
        );

        view()->composer(
            [
                'frontend.home',
                'frontend.includes.header',
                'backend.products.create',
                'backend.products.show',
            ],
            'App\Http\ViewComposers\BrandComposer'
        );
    }
}
