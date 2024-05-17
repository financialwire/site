<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TallStackUi\Facades\TallStackUi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TallStackUi::personalize()
            ->form('label')
            ->block('text', 'xl:text-lg');

        TallStackUi::personalize()
            ->form('input')
            ->block('input.wrapper', 'focus:ring-financialwire-purple focus-within:focus:ring-financialwire-purple focus-within:ring-financialwire-purple flex rounded-2xl ring-1 transition focus-within:ring-2 transition-all ease-in-out')
            ->block('input.base', 'p-4 xl:text-lg bg-gray-50 w-full rounded-lg border-0 bg-none ring-0 bg-transparent focus:outline-none focus:ring-transparent');

        TallStackUi::personalize()
            ->form('textarea')
            ->block('input.wrapper', 'focus:ring-financialwire-purple focus-within:focus:ring-financialwire-purple focus-within:ring-financialwire-purple dark:focus-within:ring-financialwire-purple flex rounded-md ring-1 transition focus-within:ring-2 transition-all ease-in-out')
            ->block('input.base', 'w-full p-4 xl:text-lg bg-gray-50 w-full rounded-lg border-0 bg-none ring-0 bg-transparent focus:outline-none focus:ring-transparent');
    }
}
