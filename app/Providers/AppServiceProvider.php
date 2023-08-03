<?php

namespace App\Providers;

use App\Models\aduan;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

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
        Carbon::setLocale('id');

        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%' . $string . '%') : $this;
        });

        Builder::macro('whereLike', function ($fields, string $string) {
            foreach (Arr::wrap($fields) as $field) {
                $this->orWhere($field, 'LIKE', "%{$string}%");
            }

            return $this;
        });


        View::composer('layouts.main', function ($view) {
            $notif = aduan::orderBy('created_at','DESC')->take(5)->get();
            $view->with('notif', $notif);
        });
    }
}
