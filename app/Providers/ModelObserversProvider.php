<?php

namespace App\Providers;

use App\Models\Users\User;
use App\Observers\Users\UserObserver;
use Illuminate\Support\ServiceProvider;

class ModelObserversProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Model observer register
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
    }
}
