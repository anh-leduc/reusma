<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\EmployeeService;
use App\Http\Services\EmployeeServiceImpl;

class EmployeeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Project Service
        $this->app->bind(EmployeeService::class, function(){
            return new EmployeeServiceImpl;
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