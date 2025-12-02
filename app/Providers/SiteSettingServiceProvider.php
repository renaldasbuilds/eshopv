<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;

use App\Models\SiteSetting;

class SiteSettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Puslapio nustatymai 
        if(Schema::hasTable('site_settings')) {
            $settings = Cache::rememberForever('site_settings', function () {
                SiteSetting::where('id', 1)->get();
            });
            View::share('settings' , $settings);
        }
    }
}
