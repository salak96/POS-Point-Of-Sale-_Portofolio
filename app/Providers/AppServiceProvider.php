<?php

namespace App\Providers;

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
        // view()->composer('admin-layout', function ($view) {
        //     $view->with('setting', Setting::first());
        // });
        // view()->composer('layouts.auth', function ($view) {
        //     $view->with('setting', Setting::first());
        // });
        // view()->composer('auth.login', function ($view) {
        //     $view->with('setting', Setting::first());
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
