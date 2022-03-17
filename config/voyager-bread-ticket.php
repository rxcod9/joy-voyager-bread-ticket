<?php

return [

    /*
     * If enabled for voyager-bread-ticket package.
     */
    'enabled' => env('VOYAGER_BREAD_TICKET_ENABLED', true),

    /*
     * The config_key for voyager-bread-ticket package.
     */
    'config_key' => env('VOYAGER_BREAD_TICKET_CONFIG_KEY', 'joy-voyager-bread-ticket'),

    /*
     * The route_prefix for voyager-bread-ticket package.
     */
    'route_prefix' => env('VOYAGER_BREAD_TICKET_ROUTE_PREFIX', 'joy-voyager-bread-ticket'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadTicket\\Http\\Controllers',
    ],
];
