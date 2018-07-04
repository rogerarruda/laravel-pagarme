<?php

namespace RogerArruda\LaravelPagarMe\Providers;

use Illuminate\Support\ServiceProvider;

use PagarMe\Sdk\PagarMe;

class PagarMeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/pagarme.php' => config_path('pagarme.php')], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('PagarMe', function ($app) {
            return new PagarMe(
                $app->config->get('pagarme.keys.api')
            );
        });
    }
}
