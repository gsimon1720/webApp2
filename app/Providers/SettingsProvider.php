<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class SettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $main_settings = Settings::all()->pluck('value','key')->toArray();
        View::share('main_settings',$main_settings);
    }
}
