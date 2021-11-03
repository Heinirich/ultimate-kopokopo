<?php

namespace Smith\UltimateKopokopo;

use Illuminate\Support\ServiceProvider;

class KopoKopoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->publishes([
            __DIR__ . '/../config/kopokopo.php' => config_path('kopokopo.php')
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->singleton(KopoKopo::class,function(){
            return new KopoKopo();
        });
    }
}

