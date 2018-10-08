<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Item;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layouts.app', function($view)
        {
            $categoriesHeader = Category::all();
            $view->with('categoriesHeader', $categoriesHeader);
        });
      

    }
    /**}
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
