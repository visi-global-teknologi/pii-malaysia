<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ActionApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'app.action.api.message.store',
            \App\Actions\Api\Message\Store\Handler::class
        );

        $this->app->bind(
            'app.action.api.news.comment.store',
            \App\Actions\Api\News\Comment\Store\Handler::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
