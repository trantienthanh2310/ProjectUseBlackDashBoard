<?php

namespace App\Providers;

use App\Repositories\EloquentRepository\UserRepository;
use App\Repositories\Interface\ProductRepositoryInterface;
use App\Repositories\Interface\UserRepositoryInterface;
use App\Repositories\EloquentRepository\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
    $this->app->bind(ProductRepositoryInterface::class,ProductRepository::class);
    }   

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
