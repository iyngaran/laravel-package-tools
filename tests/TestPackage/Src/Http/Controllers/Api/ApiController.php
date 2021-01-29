<?php


namespace Spatie\LaravelPackageTools\Tests\TestPackage\Src\Http\Controllers\Api;


use Illuminate\Routing\Controller;

class ApiController extends Controller
{
    public function index(): string
    {
        return 'My API Controller';
    }
}
