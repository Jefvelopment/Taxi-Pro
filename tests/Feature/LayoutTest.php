<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LayoutTest extends TestCase
{
    public function test_app_layout_exists()
    {
        $this->assertFileExists(resource_path('views/layouts/app.blade.php'));
    }

    public function test_layout_contains_navigation_menu()
    {
        $response = $this->get('/');
        $response->assertSee('nav');
    }
}
