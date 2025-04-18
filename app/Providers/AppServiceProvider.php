<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Article;

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

        View::composer(
            ['Visiteur.index', 'articles.create'],
            function ($view) {
                $articles = Article::paginate(3);
                $view->with('articles', $articles);
            }
        );

    }
}
