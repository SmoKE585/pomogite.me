<?php

namespace App\Providers;

use App\Models\Projects\ProjectDomain;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('domain_is_free', function (string $attribute, string $value, array $parameters) {
            return !ProjectDomain::where('domain', $value.'.'.config('app.basedomain'))->exists();
        }, 'Нельзя использовать этот домен, выберите другой!');
    }
}
