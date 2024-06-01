<?php

namespace App\Providers;

use App\Models\NSidebar;
use Illuminate\Support\Facades\Cache;
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
        $this->loadMigrationsFrom([
            database_path('migrations'),
            database_path('migrations/backend'),
        ]);
        $sidebar_lists = Cache::get('nsidebar') ?? [];
        // dd($sidebar_lists);

        view()->share('sidebar_lists',$sidebar_lists);
    }
}
