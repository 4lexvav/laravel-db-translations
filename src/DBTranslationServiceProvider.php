<?php

declare(strict_types=1);

namespace Vav\Translation;

use Vav\Translation\Loaders\DBLoader;
use Illuminate\Support\ServiceProvider;
use Vav\Translation\Services\Translator;

class DBTranslationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations' => base_path('database/migrations'),
        ], 'migrations');
    }

    public function register()
    {
        $this->app->singleton('db_translator', function ($app) {
            $translator = new Translator(new DBLoader(), $app['config']['app.locale']);
            $translator->setFallback($app['config']['app.fallback_locale']);

            return $translator;
        });
    }

    public function provides()
    {
        return [
            'db_translator',
        ];
    }
}
