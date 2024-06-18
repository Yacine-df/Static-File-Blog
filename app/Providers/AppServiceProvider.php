<?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Spatie\Sheets\Sheets;

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

        Route::bind('post', function ($path) {

            return $this->app
                ->make(Sheets::class)
                ->collection('posts')
                ->all()
                ->where('slug', $path)
                ->first();
        });


        Collection::macro('paginate', function (int $perPage = 10, $page = null, $options = []) {

            $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

            return new LengthAwarePaginator(

                $this->forPage($page, $perPage),
                $this->count(),
                $page

            );
        });
    }
}
