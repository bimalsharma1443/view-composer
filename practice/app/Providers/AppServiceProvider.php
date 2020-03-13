<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\PaymentMethod;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentMethod::class, function ($app) {
          return new PaymentMethod('usd');
        });
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
