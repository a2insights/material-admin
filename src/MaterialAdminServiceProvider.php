<?php

namespace MaterialAdmin;

use Illuminate\Support\ServiceProvider;

class MaterialAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'material-admin');

        $this->publishes([
            __DIR__.'/public/assets' => public_path('vendor/material-admin/assets'),
        ], 'material-admin/assets');
    }

    public function register()
    {
       
    }
}
