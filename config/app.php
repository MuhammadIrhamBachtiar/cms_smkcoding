<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Nama Aplikasi
    |--------------------------------------------------------------------------
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Environment Aplikasi
    |--------------------------------------------------------------------------
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Mode Debug Aplikasi
    |--------------------------------------------------------------------------
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL Aplikasi
    |--------------------------------------------------------------------------
    */

    'url' => env('APP_URL', 'http://localhost'),
    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Timezone Aplikasi
    |--------------------------------------------------------------------------
    */

    'timezone' => env('APP_TIMEZONE', 'Asia/Jakarta'),

    /*
    |--------------------------------------------------------------------------
    | Konfigurasi Bahasa Aplikasi
    |--------------------------------------------------------------------------
    */

    'locale' => env('APP_LOCALE', 'id'),
    'fallback_locale' => 'id',
    'faker_locale' => env('FAKER_LOCALE', 'id_ID'),

    /*
    |--------------------------------------------------------------------------
    | Kunci Enkripsi
    |--------------------------------------------------------------------------
    */

    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Driver Mode Maintenance
    |--------------------------------------------------------------------------
    */

    'maintenance' => [
        'driver' => env('MAINTENANCE_DRIVER', 'file'),
        'store'  => env('MAINTENANCE_STORE', 'redis'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Service Provider yang Dimuat Otomatis
    |--------------------------------------------------------------------------
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        // Package Service Provider
        Yajra\DataTables\DataTablesServiceProvider::class,

        // Service Provider Aplikasi
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Alias Class
    |--------------------------------------------------------------------------
    */

    'aliases' => Facade::defaultAliases()->merge([
        
    ])->toArray(),

];