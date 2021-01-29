<?php

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Tests\TestPackage\Src\Http\Controllers\Api\ApiController;

Route::get('api-route', fn () => 'other response');
Route::get(
    'my-api-route-with-controller',
    [ApiController::class, 'index']
);
