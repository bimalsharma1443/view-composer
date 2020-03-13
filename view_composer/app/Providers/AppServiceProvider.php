<?php

namespace App\Providers;

use App\chanel;
use App\Http\View\Composer\ChannelComposer;
use Illuminate\Support\Facades\View;
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
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Option 1 : share a view
        // with each and every singleview
        //View::share('channel',chanel::orderBy('name')->get());

        // Option 2 : Granular view
        // Using Closure based composers...
        // View::composer(['channel.index','channel.add'],function($view){
        //     $view->with('channel',chanel::orderBy('name')->get());
        // });

        // oprion 3 : class based composer
        View::composer(['channel.index','channel.add'],ChannelComposer::class);


    }
}
