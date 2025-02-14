<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate; // Додайте цей рядок
use App\Models\Post;
use App\Policies\PostPolicy;

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
        // Реєстрація політик
        Gate::policy(Post::class, PostPolicy::class);
    }
}
