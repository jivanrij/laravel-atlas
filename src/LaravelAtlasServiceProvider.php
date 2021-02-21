<?php

namespace Blijnder\LaravelAtlas;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class LaravelAtlasServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Nova::booted(function () {
            Nova::theme(asset('/vendor/laravel-atlas/css/theme.css'));
            Nova::script('atlas-theme-js', asset('/vendor/laravel-atlas/js/theme.js'));
        });

        $this->publishes([
            __DIR__ . '/../public/js' => public_path('vendor/laravel-atlas/js'),
            __DIR__ . '/../public/css' => public_path('vendor/laravel-atlas/css'),
        ], 'blijnder-atlas');

        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-atlas');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-atlas');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-atlas.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-atlas'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-atlas'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-atlas'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-atlas');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-atlas', function () {
            return new LaravelAtlas;
        });
    }
}
