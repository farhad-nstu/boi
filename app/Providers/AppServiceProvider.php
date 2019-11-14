<?php

namespace App\Providers;

use App\BookCategory;
use App\BookPublisher;
use App\BookWriter;
use App\Role;
use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        Schema::defaultStringLength('191');

        Paginator::defaultView('pagination::admin');
        Paginator::defaultSimpleView('pagination::admin');

        View::composer(['front.*',], function ($view) {

            $view->writers      = BookWriter::all();
            $view->categories   = BookCategory::all();
            $view->publishers   = BookPublisher::all();
            $view->users        = User::all();
            $view->roles        = Role::all();

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
