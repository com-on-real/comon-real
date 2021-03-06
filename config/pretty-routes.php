<?php

return [
    /**
     * The endpoint to access the routes.
     */
    'url' => 'routes',

    /**
     * The methods to hide.
     */
    'hide_methods' => [
        'HEAD',
    ],

    'hide_matching' => [
        '#^telescope#',
        '#^_ignition#',
        '#^route#',
        '#^api#',
    ],
];