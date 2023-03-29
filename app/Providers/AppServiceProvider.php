<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all()->where('status','Faol');
        View::share('categories', $categories);
        $subcategories = Subcategory::all()->where('status','Faol');
        View::share('subcategories', $subcategories);
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
