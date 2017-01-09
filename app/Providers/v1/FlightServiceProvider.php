<?php

namespace App\Providers\v1;

use App\Services\v1\FlightsService;
use Illuminate\Support\ServiceProvider;

class FlightServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FlightsService::class, function($app){
            return new FlightsService();
        });
    }
}
