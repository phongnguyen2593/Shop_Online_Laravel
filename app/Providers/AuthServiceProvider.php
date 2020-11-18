<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Policies\ProductPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\UserPolicy;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Product::class  => ProductPolicy::class,
        Category::class => CategoryPolicy::class,
        User::class     => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
