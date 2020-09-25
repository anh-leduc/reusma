<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\EffortUsageService;
use App\Http\Services\EffortUsageServiceImpl;


class EffortUsageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EffortUsageService::class, function(){
            return new EffortUsageServiceImpl;
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
    }
}
