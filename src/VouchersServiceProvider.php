<?php

namespace Controlpanel\Vouchers;

use Illuminate\Support\ServiceProvider;

class VouchersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'vouchers');

        $this->loadJsonTranslationsFrom(__DIR__ . '/../lang/en.json');

        $this->publishes([
            __DIR__ . '/../lang' => $this->app->langPath('vendor/vouchers'),
        ]);
    }
}


