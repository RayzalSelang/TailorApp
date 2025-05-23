<?php

namespace App\Providers;

use App\Models\WebSettings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class LayoutsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer([
            'auth.login',
            'layouts.auth.index',
            'layouts.dashboard.index',
            'layouts.dashboard.sidebar',
            'layouts.dashboard.footer',
        ], function ($view) {
            $webset = WebSettings::first();

            $view->with('webset', $webset);
        });
    }
}
