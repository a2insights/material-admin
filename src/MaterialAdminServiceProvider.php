<?php

namespace MaterialAdmin;

use Illuminate\Support\ServiceProvider;

/**
 * Class MaterialAdminServiceProvider
 * @package MaterialAdmin
 */
class MaterialAdminServiceProvider extends ServiceProvider
{
    /**
     * Boot the resources path
     * @void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'material');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->publishes([
            __DIR__.'/public/assets' => public_path('vendor/material/assets'),
        ], 'material/assets');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/material'),
        ], 'material/views');

        $this->publishes([
            __DIR__.'/config/material.php' => config_path('material.php'),
        ], 'material/config');
    }

    /**
     * Register resources
     * @void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/material.php', 'material'
        );
    }
}
