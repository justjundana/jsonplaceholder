<?php

namespace App\Providers;

use App\Repositories\Query\GalleryRepository;
use App\Repositories\Query\UserRepository;
use App\Repositories\GalleryRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(GalleryRepositoryInterface::class, GalleryRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
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
