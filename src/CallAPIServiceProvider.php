<?php

namespace TuanHA\CallAPI;

use Illuminate\Support\ServiceProvider;

class CallAPIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/callApi.php' => config_path('callApi.php'),
        ], 'public');
    }
}
