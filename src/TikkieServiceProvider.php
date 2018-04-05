<?php

namespace Prullenbak\LaravelTikkie;

use PHPTikkie\Environment;
use PHPTikkie\PHPTikkie;
use Illuminate\Support\ServiceProvider;

class TikkieServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/tikkie.php' => config_path('tikkie.php'),
        ]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {     
        $this->app->singleton(PHPTikkie::class, function($app){
            $apiKey = config('tikkie.key','key');            
            $testMode = config('tikkie.testmode',true);
            
            $environment = new Environment($apiKey, $testMode);
            $environment->loadPrivateKey(config('tikkie.privatekey','private_rsa.pem'));            

            return new PHPTikkie($environment);
        });        
    }
}
