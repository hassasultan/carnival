<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('packagePermission', function ($permission) {
            return "<?php if(auth()->check() && auth()->user()->hasPackagePermission($permission)): ?>";
        });

        Blade::directive('endPackagePermission', function () {
            return "<?php endif; ?>";
        });
    }
}
