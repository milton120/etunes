<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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

        \Braintree_Configuration::environment('sandbox');
        \Braintree_Configuration::merchantId('6smzp5qtgsdhtbdm');
        \Braintree_Configuration::publicKey('jrpscyppy84dvycm');
        \Braintree_Configuration::privateKey('9276a445e306b5c2f66c431c920d9c19');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
