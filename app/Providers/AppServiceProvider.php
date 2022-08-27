<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ProvandcityInterface;
use App\Services\API_Provandcity;
use App\Services\DB_Provandcity;


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
        if (config('keys.swap_search') == 'db') {
            $this->app->bind(ProvandcityInterface::class, DB_Provandcity::class);
        }
        else if (config('keys.swap_search') == 'api') {
            $this->app->bind(ProvandcityInterface::class, API_Provandcity::class);
        }
    }
}
