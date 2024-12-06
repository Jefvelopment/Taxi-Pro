<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class CarsTest extends TestCase
{
    use RefreshDatabase;


    public function test_has_a_route_for_cars_index()
    {
        $response = $this->get(route('cars.index'));
        $response->assertStatus(200);
    }


    public function test_can_access_cars_index_view()
    {
        $response = $this->get(route('cars.index'));
        $response->assertViewIs('cars.index');
    }


    public function test_shows_all_cars_on_the_index_page()
    {
        // Voeg voorbeelddata toe
        DB::table('cars')->insert([
            ['make' => 'Ford', 'model' => 'Fiesta', 'year' => 2010, 'license_plate' => '12-AB-CD'],
            ['make' => 'Volkswagen', 'model' => 'Golf', 'year' => 2015, 'license_plate' => '34-EF-GH']
        ]);

        $response = $this->get(route('cars.index'));
        $response->assertSee('Ford');
        $response->assertSee('Volkswagen');
    }
}
