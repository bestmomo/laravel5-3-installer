<?php

namespace Bestmomo\Installer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class InstallerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(){}

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Get namespace
        $nameSpace = $this->app->getNamespace();

        // Set namespace aliases for Controllers
        AliasLoader::getInstance()->alias('AppController', $nameSpace . 'Http\Controllers\Controller');
        AliasLoader::getInstance()->alias('RegisterController', $nameSpace . 'Http\Controllers\Auth\RegisterController');

        // Routes
        require __DIR__.'/Http/routes.php';

        // Views
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/installer'),
        ], 'laravel-installer');

        // Translations
        $this->publishes([
            __DIR__.'/../lang' => resource_path('lang'),
        ], 'laravel-installer');

        // Configuration
        $this->publishes([
            __DIR__.'/../config/installer.php' => config_path('installer.php'),
        ], 'laravel-installer');
    }

}