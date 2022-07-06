<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\CartHelper;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Pagination\Paginator;

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
        view()->composer('*',function($view){
            $category = Category::all();
            $brand = Brand::all();
            $view->with([
                'cart'=> new CartHelper(),
            ]);
            $view->with(compact('category','brand'));

        });
        Paginator::useBootstrap();
    }
}
