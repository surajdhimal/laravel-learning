<?php

namespace App\Providers;

use App\Http\Controllers\ThreadController;
use App\Models\Account;
use App\Models\Thread;
use App\Observers\AccountObserver;
use App\Observers\ThreadObserver;
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
        Account::observe(AccountObserver::class);
        Thread::observe(ThreadObserver::class);
    }
}
