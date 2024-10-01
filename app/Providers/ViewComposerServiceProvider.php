<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer("*", function ($view) {
            $categories = Category::where(['status' => 1])->get();
            $mostViewedPost = News::activeEntries()->where('views', '>', 0)->orderBy('views', 'DESC')->first();
            // echo $mostViewedPost["title"];
            // exit;
            $view->with('categories', $categories);
            $view->with('mostViewedPost', $mostViewedPost);
        });
    }
}
