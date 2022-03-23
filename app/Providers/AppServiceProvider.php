<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\BaseRepository;
use App\Repository\BaseRepositoryInterface;
use App\Repository\Categories\CategoryRepository;
use App\Repository\Categories\CategoryRepositoryInterface;
use App\Repository\Products\ProductRepository;
use App\Repository\Products\ProductRepositoryInterface;

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
        $this->app->singleton(BaseRepositoryInterface::class,BaseRepository::class);
        $this->app->singleton(CategoryRepositoryInterface::class,CategoryRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class,ProductRepository::class);
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
