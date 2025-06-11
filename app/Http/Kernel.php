<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Middleware lainnya
        'admin' => \App\Http\Middleware\IsAdmin::class, // Menambahkan middleware 'admin'
    ];
}
