<?php


/* This file is part of the Oneapp package.
 *
 * (c) Oneapp <support@1appgo.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 * @date: 2022-07-15
 * 
 */ 

namespace Oneapp\Oneapp;

use Illuminate\Support\ServiceProvider;

class OneappServiceProvider extends ServiceProvider
{

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Publishes all the config file this package needs to function
    */
    public function boot()
    {
        $config = realpath(__DIR__.'/../resources/config/oneapp.php');

        $this->publishes([
            $config => config_path('oneapp.php')
        ]);
    }

    /**
    * Register the application services.
    */
    public function register()
    {
        $this->app->bind('oneapp', function () {

            return new Oneapp;

        });
    }
    
    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['oneapp'];
    }
}