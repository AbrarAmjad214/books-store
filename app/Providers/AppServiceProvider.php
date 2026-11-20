<?php

namespace App\Providers;

use App\Http\Controllers\CartController;
use App\Models\Category;
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
        // @money($amount) → "$24.99" using the store currency
        Blade::directive('money', function ($expression) {
            return "<?php echo e(config('store.currency_symbol')) . number_format((float) ($expression), 2); ?>";
        });

        // Brand, contact details and currency (config/store.php) for every view
        View::share('store', config('store'));

        // Header mini-cart and category menu on the storefront layout
        View::composer('layouts.ebukz', function ($view) {
            $view->with('miniCart', CartController::summary());
            $view->with('navCategories', Category::root()->active()->with('children')->get());
        });
    }
}
