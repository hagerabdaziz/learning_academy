<?php

namespace App\Providers;
use App\Models\cat;
use App\Models\setting;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.inc.header',function($view){
            $view->with('cats',cat::select('id','name')->get());
            $view->with('settings',setting::select('logo','favicon')->first());

        });
        view()->composer('front.inc.footer',function($view){
            $view->with('settings',setting::first());

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
