<?php

namespace App\Providers;

use App\Views\Composers\TestComposer;
use Illuminate\Support\Facades\Blade;
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

        Blade::directive('datetime', function ($expression) {
            return "<?php echo (new DateTime('@' . $expression))->format('m/d/Y H:i'); ?>";
        });

        Blade::if('admin', function ($value) {
            return $value === 'admin';
        });

        Blade::if('editor', function ($value) {
            return $value === 'editor';
        });


    }
}
