<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\News;
use App\Observers\NewsObserver;
use Laravel\Nova\Nova;

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
        Nova::serving(function () {
            News::observe(NewsObserver::class);
        });
    }
}
