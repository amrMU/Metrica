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

            if (Config::get('app.locale') == 'en'){
                $title = 'title_en';
                $content = 'content_en';
                $Name= 'nameEn';
                $name= 'name_en';
            }else{
                $title = 'title_ar';
                $content = 'content_ar';
                $Name= 'nameAr';
                $name= 'name_ar';
            }
            view()->share('title', $title);
            view()->share('content', $content);
            view()->share('Name', $Name);
            view()->share('name', $name);
    
            
            
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
