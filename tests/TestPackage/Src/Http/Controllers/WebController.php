<?php


namespace Spatie\LaravelPackageTools\Tests\TestPackage\Src\Http\Controllers;


use Illuminate\Routing\Controller;

class WebController extends Controller
{
    public function index(): string
    {
        return 'My Web Controller';
    }
}
