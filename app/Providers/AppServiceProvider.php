<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Message;

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
        Paginator::useBootstrap();

        View::composer('includesdash.topnav', function ($view) {
            $unreadCount = Message::where('readed', 0)->count();
            $messages = Message::get();
            $view->with(['unreadCount' => $unreadCount, 'messages' => $messages]);
        });


    }
}
