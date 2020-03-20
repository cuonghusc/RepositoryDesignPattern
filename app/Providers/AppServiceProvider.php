<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Student\StudentRepositoryInterface;
use App\Repositories\Student\StudentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(StudentRepositoryInterface::class,StudentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
