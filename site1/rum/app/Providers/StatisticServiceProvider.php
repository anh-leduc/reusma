<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\StatisticService;
use App\Http\Services\StatisticServiceImpl;

class StatisticServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Statistic Service
        $this->app->bind(StatisticService::class, function(){
            return new StatisticServiceImpl;
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
