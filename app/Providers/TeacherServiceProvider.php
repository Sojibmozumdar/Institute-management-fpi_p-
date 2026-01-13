<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\TeacherRepository;
use App\Repositories\TeacherRepositoryInterface;

class TeacherServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
{
    $this->app->bind(TeacherRepositoryInterface::class,TeacherRepository::class,);
}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
