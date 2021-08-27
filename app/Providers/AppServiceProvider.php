<?php

namespace App\Providers;

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
      $this->app->singleton('twilio', function(){
        return new \Twilio\Rest\Client( config("apikeys.TWILIO_SID"), config("apikeys.TWILIO_AUTH_TOKEN") );
      });
      
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      date_default_timezone_set( config('app.timezone') );
    }
}
