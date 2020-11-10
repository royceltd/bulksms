<?php

namespace RoyceLtd\BulkSMS;

use Illuminate\Support\ServiceProvider;
use RoyceLtd\BulkSMS\Services\BulkSMS;

class RoyceBulSmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('roycebulksms', function () {

            return new BulkSMS();
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
        $this->publishes([
            __DIR__ . '/config/roycebulksms.php' =>  config_path('roycebulksms.php'),
        ], 'config');
    }
}
