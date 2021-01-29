<?php

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Tests\TestPackage\Src\Http\Controllers\WebController;

Route::get('my-route', fn() => 'my response');
Route::get(
    'my-web-route-with-controller',
    [WebController::class, 'index']
);
