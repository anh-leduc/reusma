<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\ProjectService;
use App\Http\Services\ProjectServiceImpl;

class ProjectServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Project Service
        $this->app->bind(ProjectService::class, function(){
            return new ProjectServiceImpl;
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
