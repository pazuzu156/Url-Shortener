<?php

/**
 * Scara uses configuration scripts to configure your installation
 * This config script is the main application configuration
 * and sets default values as well as register Scara's service providers and facades.
 */

return [
    // Basic app configuration
    'debug'             => true,

    // this sets the default timezone for Scara
    'timezone'          => 'America/New_York',

    // The application's translation language
    'lang'              => 'en_US', // Current set language
    'langpath'          => app_path().'/lang/', // Translation location

    // Set to true if you use a PHP version that
    // doesn't support the password_* functions
    'crypt_compat'      => false,

    // The table that will be used for user authentication
    // Don't include prefix! This will be automatically detected
    'auth_table'        => 'users',

    // App Information
    'appname'           => 'scara',
    'basepath'          => '/url',

    // Where are your routes defined?
    'routes'            => app_path().'/routes.php',
    'errors'            => app_path().'/errors.php',

    // This framework uses the Blade templating engine
    // Where are your views and where will you cache your
    // views?
    'views'             => app_path().'/views/',
    'cache'             => storage_path().'/cache/',

    // What driver should the session run?
    // Session, Cookie, or File
    'session'           => 'file',

    // If you chose file sessions, where are they stored?
    'session_location'  => storage_path().'/sessions/',

    // Session decrypt token
    // Must be 16, 24, or 32 characters
    'token'             => 'O56JpRkTjPvKNn1S',

    // Facades (Aliases) require being registered by
    // The services provider. Any facade's service provider
    // is registered here
    'services'          => [
        'Scara\Config\ConfigServiceProvider',
        'Scara\Hashing\HashServiceProvider',
        'Scara\Html\HtmlServiceProvider',
        'Scara\Input\InputServiceProvider',
        'Scara\Validation\ValidatorServiceProvider',
        'Scara\Session\SessionServiceProvider',
        'Scara\Auth\AuthenticationServiceProvider',
        'Scara\Utils\BenchmarkServiceProvider',
        'Scara\Mail\MailerServiceProvider',

        // Place any custom service providers below
    ],

    // Application aliases (Facades)
    // These are used for working with classes in
    // Blade or simple importing of classes in code
    'aliases'           => [
        // Core aliases
        'Config'        => 'Scara\Support\Facades\Config',
        'Session'       => 'Scara\Support\Facades\Session',
        'Html'          => 'Scara\Support\Facades\Html',
        'Form'          => 'Scara\Support\Facades\Form',
        'Hash'          => 'Scara\Support\Facades\Hash',
        'Input'         => 'Scara\Support\Facades\Input',
        'Validator'     => 'Scara\Support\Facades\Validator',
        'Auth'          => 'Scara\Support\Facades\Auth',
        'Benchmark'     => 'Scara\Support\Facades\Benchmark',
        'Mail'          => 'Scara\Support\Facades\Mail',

        // Place any custom aliases below
    ],

    // Custom validation template array
    'validation'      => [],
];
