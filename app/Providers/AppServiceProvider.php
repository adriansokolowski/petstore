<?php

namespace App\Providers;

use App\Helpers\HttpRequestHandler;
use App\Helpers\HttpRequestHandlerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(HttpRequestHandlerInterface::class, function () {
            return new HttpRequestHandler(config('petstore.base_url'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
