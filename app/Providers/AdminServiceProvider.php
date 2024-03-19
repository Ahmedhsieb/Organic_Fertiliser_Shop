<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminHomeInterface',
            'App\Http\Repositories\Admin\AdminHomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminFacilitiesInterface',
            'App\Http\Repositories\Admin\AdminFacilitiesRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminCoursesInterface',
            'App\Http\Repositories\Admin\AdminCoursesRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminKidKinderInterface',
            'App\Http\Repositories\Admin\AdminKidKinderRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminTeachersInterface',
            'App\Http\Repositories\Admin\AdminTeachersRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminReviewsInterface',
            'App\Http\Repositories\Admin\AdminReviewsRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminContactsInterface',
            'App\Http\Repositories\Admin\AdminContactsRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminBlogsInterface',
            'App\Http\Repositories\Admin\AdminBlogsRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\Auth\AdminAuthInterface',
            'App\Http\Repositories\Admin\Auth\AdminAuthRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminProfileInterface',
            'App\Http\Repositories\Admin\AdminProfileRepository'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
