<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

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
        View::composer(['partials.header', 'partials.footer'], function ($view) {
            $headerLinks = config("dbHeader.headerLinks");
            $footerLinks = config("dbFooter.footerLinks");
            $view->with('headerLinks', $headerLinks)
                ->with('footerLinks', $footerLinks);
            dd($headerLinks, $footerLinks);


        });

    }
}