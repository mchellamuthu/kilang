<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HashidsServiceprovider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */


    /**
     * Register the application services.
     *
     * @return void
     */
     public function register()
     {
         $this->app->bind('hashids', function()
         {
             return new \Hashids\Hashids('base64:1S39ZMqdZCQAngfV3ZKb2Ax4rO7pD2mMEdxQXQBEO7M=',30,'abcdefghijklmnopqrstuvwxyz1234567890');
         });
     }
}
