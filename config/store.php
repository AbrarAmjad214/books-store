<?php

/*
 * Storefront branding & contact details — change these in one place
 * (or override with the matching .env keys). Contact values below are
 * placeholders until the client provides real ones.
 */
return [
    'name' => env('STORE_NAME', 'BookStore'),
    'tagline' => env('STORE_TAGLINE', 'Books for every reader, delivered worldwide'),

    'email' => env('STORE_EMAIL', 'support@bookstore.com'),
    'phone' => env('STORE_PHONE', '+1 (800) 555-0199'),
    'address' => env('STORE_ADDRESS', '123 Library Street, London, United Kingdom'),
    'hours' => env('STORE_HOURS', 'Mon – Fri: 9:00 – 18:00 (GMT)'),

    'currency_symbol' => env('STORE_CURRENCY_SYMBOL', '$'),
    'free_shipping_over' => (float) env('STORE_FREE_SHIPPING_OVER', 50),

    'social' => [
        'facebook' => env('STORE_FACEBOOK', '#'),
        'instagram' => env('STORE_INSTAGRAM', '#'),
        'x' => env('STORE_X', '#'),
        'youtube' => env('STORE_YOUTUBE', '#'),
    ],
];
