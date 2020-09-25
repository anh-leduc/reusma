<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\EmployeeDetailService;
use App\Http\Services\EmployeeDetailServiceImpl;

class EmployeeDetailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //ProjDetailService
        $this->app->bind(EmployeeDetailService::class, function(){
            return new EmployeeDetailServiceImpl;
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
