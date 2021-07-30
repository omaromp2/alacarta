<?php

namespace App\Providers;
use App\Models\Cashier\User;
use Illuminate\Contracts\Routing\UrlGenerator;
use Laravel\Cashier\Cashier;

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
        // agregamos cashier 
        // Cashier::useCustomerModel(User::class);
        // Cashier::calculateTaxes();
        // Temp para probar con https 
        // app(UrlGenerator::class)->forceScheme('https');
    }
}
