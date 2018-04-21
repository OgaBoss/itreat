<?php

namespace ITreat\Providers;

use Illuminate\Support\ServiceProvider;
use ITreat\Repository\Customer\CustomerRepository;
use ITreat\Repository\Customer\ICustomer;
use ITreat\Repository\Merchant\IMerchant;
use ITreat\Repository\Merchant\MerchantRepository;
use ITreat\Repository\QRCodes\IQRCodes;
use ITreat\Repository\QRCodes\QRCodeRepository;

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

        $this->app->bind(
            IQRCodes::class,
            QRCodeRepository::class
        );

        $this->app->bind(
            ICustomer::class,
            CustomerRepository::class
        );
    }
}
