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
        Blade::if('PackagePermission', function (...$permissions) {
            /** @var \App\Models\User|null $user */
            $user = auth()->user();

            if (!$user) {
                return false;
            }

            // If user is admin, always allow
            if ($user->isAdmin()) {
                return true;
            }

            // If any of the given permissions exist for the user
            foreach ($permissions as $permission) {
                if ($user->hasPackagePermission($permission)) {
                    return true;
                }
            }

            return false;
        });

        /*
        Blade::directive('packagePermission', function ($permission) {
            return "<?php if(auth()->check() && auth()->user()->hasPackagePermission($permission)): ?>";
        });

        Blade::directive('endPackagePermission', function () {
            return "<?php endif; ?>";
        }); */
    }
}
