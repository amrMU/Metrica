<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Setting,App\City;
use App;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::booted(function()
        {
            
            if (\Schema::hasTable('settings')) {
                $setting = Setting::first();
                Config::set('app.name',@$setting->title_en);
                Config::set('mail.driver',@$setting->mail_provider_info->MAIL_DRIVER);
                Config::set('mail.host',@$setting->mail_provider_info->MAIL_HOST);
                Config::set('mail.port',@$setting->mail_provider_info->MAIL_port);
                Config::set('mail.username',@$setting->mail_provider_info->MAIL_USERNAME);
                Config::set('mail.password',@$setting->mail_provider_info->MAIL_PASSWORD);
                view()->share('setting', $setting);
            }

            if(\Schema::hasTable('cities')){
                $cities = City::all();
                view()->share('cities', $cities);

            }
            
            
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
    }
}
