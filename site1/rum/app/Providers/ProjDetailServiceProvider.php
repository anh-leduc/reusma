<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\ProjDetailService;
use App\Http\Services\ProjDetailServiceImpl;

class ProjDetailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //ProjDetailService
        $this->app->bind(ProjDetailService::class, function(){
            return new ProjDetailServiceImpl;
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
