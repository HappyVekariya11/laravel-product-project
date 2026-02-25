<?php

namespace App\Providers;

use App\PaymentService\PaypalAPI;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
 use App\PaymentService\PaymentServiceInterface;
class PaymentServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(abstract: PaymentServiceInterface::class,concrete: PaypalAPI::class);

              
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
