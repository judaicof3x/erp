<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Service;
use App\Models\User;
use App\Observers\ClientObserver;
use App\Observers\Produtos\CategoryObserver;
use App\Observers\Produtos\ServiceObserver;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(125);

        User::observe(UserObserver::class);
        Client::observe(ClientObserver::class);
        Category::observe(CategoryObserver::class);
        Service::observe(ServiceObserver::class);
    }
}
