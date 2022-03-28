<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\BaseRepository;
use App\Repository\BaseRepositoryInterface;
use App\Repository\Categories\CategoryRepository;
use App\Repository\Categories\CategoryRepositoryInterface;
use App\Repository\Customers\CustomerRepository;
use App\Repository\Customers\CustomerRepositoryInterface;
use App\Repository\Products\ProductRepository;
use App\Repository\Products\ProductRepositoryInterface;
use App\Repository\Images\ImageRepository;
use App\Repository\Images\ImageRepositoryInterface;
use App\Repository\Pages\PageRepository;
use App\Repository\Pages\PageRepositoryInterface;



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
        $this->app->singleton(ImageRepositoryInterface::class,ImageRepository::class);
        $this->app->singleton(CustomerRepositoryInterface::class,CustomerRepository::class);
        $this->app->singleton(PageRepositoryInterface::class,PageRepository::class);
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
