<?php

namespace App\Providers;
use Illuminate\Support\facades\schema;
use Illuminate\Support\ServiceProvider;
use App\Setting;

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
       Schema::defaultStringLength(191);
       $setting = Setting::checkSettings();

       view()->share([

         'settings'=>$setting
       ]);
    }
}
