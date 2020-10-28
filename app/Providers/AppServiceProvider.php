<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\{App, Schema, URL};
use Inertia\Inertia;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Inertia::share([
            "auth" => function(){
                return [
                    "user" => Auth::user() ? [
                        "id" => Auth::user()->id,
                        "name" =>  Auth::user()->name
                    ] : null
                ];
            },
            "errors" => function(){
                return session()->get("errors") 
                    ? session()->get('errors')->getBag('default')->getMessages()
                    : (object) [];               
            }

        ]);
    }
}
