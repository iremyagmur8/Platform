<?php

namespace App\Providers;

use App\Models\contact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use App\Models\category;
use App\Models\post;
use Config;

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

        Paginator::useBootstrap();
        view()->composer('*', function ($view) {

            $vars = new \ArrayObject();

            $vars->menu = category::where('parent_id', '=', 1)->orderBy('sort')->get();
            $vars->academic = category::where('parent_id', '=', 129)->orderBy('sort')->get();

            $vars->contact = contact::first();
            $view->with(compact('vars'));
        });

    }
}
