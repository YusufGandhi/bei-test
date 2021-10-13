<?php

namespace FutureSuper\BackendInfra;

use Illuminate\Support\ServiceProvider;

class BackendInfraServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(BackendLog::class, function() {
            return new BackendLog();
        });

    }

    public function boot()
    {

    }
}