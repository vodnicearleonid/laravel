<?php

namespace app\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        //
        Blade::directive('myDir', function ($var){
            return "<h1>new directive - $var</h1>";
        });

        DB::listen(function ($query){
            dump($query->sql);
            //dump($query->bindings);
        });

    }
}
