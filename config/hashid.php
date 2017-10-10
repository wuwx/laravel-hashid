<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hashid Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the hashid connections below you wish
    | to use as your default connection for all hashid work. Of course
    | you may use many connections at once using the Hashid manager.
    |
    */

    'default' => 'hashids.integer',

    /*
    |--------------------------------------------------------------------------
    | Hashid Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the hashid connections setup for your application.
    | Of course, examples of configuring each hashid driver is shown below
    | to make development simple. You are free to add more.
    |
    */

    'connections' => [

        'hashids' => [
            'driver' => 'hashids',
            'salt' => env('HASHIDS_SALT', ''),
            'min_length' => env('HASHIDS_MIN_LENGTH', 0),
            'alphabet' => env('HASHIDS_ALPHABET', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),
        ],

        'hashids.integer' => [
            'driver' => 'hashids.integer',
            'salt' => env('HASHIDS_INTEGER_SALT', ''),
            'min_length' => env('HASHIDS_INTEGER_MIN_LENGTH', 0),
            'alphabet' => env('HASHIDS_INTEGER_ALPHABET', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),
        ],

        'hashids.hex' => [
            'driver' => 'hashids.hex',
            'salt' => env('HASHIDS_HEX_SALT', ''),
            'min_length' => env('HASHIDS_HEX_MIN_LENGTH', 0),
            'alphabet' => env('HASHIDS_HEX_ALPHABET', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),
        ],

        'optimus' => [
            'driver' => 'optimus',
            'prime' => env('OPTIMUS_PRIME'),
            'inverse' => env('OPTIMUS_INVERSE'),
            'random' => env('OPTIMUS_RANDOM', 0),
        ],

        'base62' => [
            'driver' => 'base62',
            'characters' => env('BASE62_CHARACTERS', '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),
        ],

        'base62.integer' => [
            'driver' => 'base62.integer',
            'characters' => env('BASE62_INTEGER_CHARACTERS', '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),
        ],

        'base64' => [
            'driver' => 'base64',
        ],

        'base64.integer' => [
            'driver' => 'base64.integer',
        ],

        'hex' => [
            'driver' => 'hex',
        ],

        'hex.integer' => [
            'driver' => 'hex.integer',
        ],

    ],

];
