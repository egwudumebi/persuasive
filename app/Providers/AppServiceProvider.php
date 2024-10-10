<?php

namespace App\Providers;

use App\Models\Patient;
use App\Models\Review;
use App\Policies\ReviewPolicy;
// use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Review::class => ReviewPolicy::class,
    ];
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
        $this->registerPolicies();
        // Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();

        // Ploicy Registration
        // Gate::policy(Review::class, ReviewPolicy::class);
        // Gate::define('update-review', Review::class . '@update');
        // Gate::define('delete-review', Review::class . '@delete');
    }
}
