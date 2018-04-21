<?php

namespace ITreat\Providers;

use Illuminate\Support\ServiceProvider;
use ITreat\Repository\Merchant\IMerchant;
use ITreat\Repository\Merchant\MerchantRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            IMerchant::class,
            MerchantRepository::class
        );
    }
}
