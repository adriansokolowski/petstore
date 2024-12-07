<?php

return [
    'base_url' => env('PETSTORE_API_URL', 'https://petstore.swagger.io/v2'),
    'endpoints' => [
        'pet' => [
            'find_by_status' => '/pet/findByStatus',
            'base' => '/pet',
        ],
    ],
    'statuses' => ['available', 'pending', 'sold'],
];
