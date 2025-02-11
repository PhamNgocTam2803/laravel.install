<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\View\View;
use App\Http\Composers\HelloComposer;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
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
    public function boot(): void{
        //
        View::composer('hello', HelloComposer::class);
    }
}
