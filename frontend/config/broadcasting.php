<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | This option controls the default broadcaster that will be used by the
    | framework when an event needs to be broadcast. You may set this to
    | any of the connections defined in the "connections" array below.
    |
    | Supported: "reverb", "ably", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_DRIVER', 'reverb'),  // Set 'reverb' as the default broadcaster

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the broadcast connections that will be used
    | to broadcast events to other systems or over websockets. Samples of
    | each available type of connection are provided inside this array.
    |
    */

    'connections' => [

        'reverb' => [
            'driver' => 'pusher', // Laravel uses 'pusher' driver for Reverb
            'key' => env('REVERB_APP_KEY'),  
            'secret' => env('REVERB_APP_SECRET'),  
            'app_id' => env('REVERB_APP_ID'),  
            'options' => [
                'host' => env('REVERB_HOST'),  
                'port' => env('REVERB_PORT'),  
                'scheme' => env('REVERB_SCHEME', 'https'),  
                'useTLS' => env('REVERB_SCHEME', 'https') === 'https',  
            ],
            'client_options' => [
            ],
        ],

        'ably' => [
            'driver' => 'ably',
            'key' => env('ABLY_KEY'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];
