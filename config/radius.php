<?php

return [
    'server' => [
        'host' => env('RADIUS_SERVER_HOST'),
        'port' => env('RADIUS_SERVER_PORT'),
    ],
    'database' => [
        'connection' => env('RADIUS_DB_CONNECTION', 'radius'),
    ],
];