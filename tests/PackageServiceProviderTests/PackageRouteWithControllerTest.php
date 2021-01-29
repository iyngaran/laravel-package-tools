<?php

namespace Spatie\LaravelPackageTools\Tests\PackageServiceProviderTests;

use Spatie\LaravelPackageTools\Package;
use Spatie\TestTime\TestTime;

class PackageRouteWithControllerTest extends PackageServiceProviderTestCase
{
    public function configurePackage(Package $package)
    {
        TestTime::freeze('Y-m-d H:i:s', '2020-01-01 00:00:00');

        $package
            ->name('laravel-package-tools')
            ->hasWebRoutes()
            ->hasApiRoutes();
    }

    /** @test */
    public function it_can_load_the_web_route_with_controller()
    {
        $response = $this->get('my-web-route-with-controller');
        $response->assertSeeText('My Web Controller');
    }

    /** @test */
    public function it_can_load_the_api_route_with_controller()
    {
        $response = $this->get('api/my-api-route-with-controller');
        $response->assertSeeText('My API Controller');
    }
}
