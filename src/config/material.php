<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Config
    |--------------------------------------------------------------------------
    |
    | This option controls the material admin
    | using this file to change configs
    |
    */

    // The prefix used in all base routes (the 'admin' in admin/dashboard)
    // You can make sure all your URLs use this prefix by using the backpack_url() helper instead of url()
    'route_prefix' => 'admin',

    // The middleware default (admin/dashboard)
    'middleware' => 'web',

    // Define name app
    'brand' => 'Material Admin'
];
