<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\ArticleController;
use App\Models\Article;



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


    public function boot()
    {
        view()->composer('*', function ($view) {
            $featuredArticles = Article::latest()
                                      ->take(3)
                                      ->get(['id', 'titre', 'image_path', 'created_at']);
            
            $view->with('featuredArticles', $featuredArticles);
        });
    }
}
