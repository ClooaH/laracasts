<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Example;
use App\Models\Collaborator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(Example::class, function (){
            return new Example('apiKey');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
