<?php

namespace App\Providers;

use App\Views\Composers\TestComposer;
use Illuminate\Support\Facades\View;
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
        $name = "Md. Kamrul Hasan";
        $company = "Workspace Infotech Ltd";

        // Share both name and company with all views
        view()->share([
            'name' => $name,
            'company' => $company,
        ]);


        // View::composer('blog.test', function ($view) {
        //     $testComposer = "Test Composer";

        //     $view->with('testComposer', $testComposer);
        // });

        View::composer('blog.test', TestComposer::class);
    }
}
