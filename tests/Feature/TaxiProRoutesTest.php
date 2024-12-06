<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaxiProRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_checks_root_route_is_updated_to_home()
    {
        $response = $this->get('/');
        $response->assertViewIs('home');
    }

    public function test_checks_if_all_navigation_routes_are_defined()
    {
        $routes = [
            '/', // Home route
            '/about', // Voorbeeld van andere routes
            '/services',
            '/contact',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200, "Route {$route} is not accessible.");
        }
    }
}
