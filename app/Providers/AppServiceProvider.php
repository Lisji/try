<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.site'], function ($view) {
            $routeName = request()->route()->uri;
            if(strpos($routeName,'/',0) != false){
                $end = strpos($routeName,'/',0);
                $routeName = substr($routeName, 0, $end);
            }
            $view->with('routeName', $routeName);
        });

        View::composer(['blog','post','searchtable'], function ($view) {
            $categories = Category::where('enabled',true)->orderBy('sort','asc')->withCount(['posts' => function (Builder $query) {
            $query->where('status', 'published');
            }])->get();
            $view->with('categories',$categories);
        });

        View::composer('partials.recents', function ($view) {
            $recents = Post::where('status', 'published')->orderBy('created_at', 'asc')->take(5)->get();
            $view->with('recents',$recents);
        });

        Paginator::defaultView('pagination::bootstrap-4'); 
    }
}
