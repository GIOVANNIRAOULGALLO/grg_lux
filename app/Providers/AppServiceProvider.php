<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
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
        view()->share('allProducts', Product::all());
        view()->share('previewProducts', Product::take(4)->get());
        view()->share('allCategories', Category::all());
        view()->share('previewBrands', Brand::inRandomOrder()->limit(5)->get());
    }
}
