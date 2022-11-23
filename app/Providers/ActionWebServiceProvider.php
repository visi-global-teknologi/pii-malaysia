<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ActionWebServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'app.action.web.get-list-homepage-picture-slider',
            \App\Actions\Web\GetListHomepagePictureSlider\Handler::class
        );

        $this->app->bind(
            'app.action.web.get-list-member',
            \App\Actions\Web\GetListMember\Handler::class
        );

        $this->app->bind(
            'app.action.web.get-list-emagazine-limit-six',
            \App\Actions\Web\GetListEmagazineLimitSix\Handler::class
        );

        $this->app->bind(
            'app.action.web.get-list-news-limit-six',
            \App\Actions\Web\GetListNewsLimitSix\Handler::class
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
