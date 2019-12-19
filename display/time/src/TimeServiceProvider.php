<?php

namespace Display\Time;

use Illuminate\Support\ServiceProvider;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
    }

    public function register()
    {
        

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    
}
