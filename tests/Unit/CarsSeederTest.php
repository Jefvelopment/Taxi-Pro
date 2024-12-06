<?php

namespace Tests\Unit;

use Database\Seeders\CarsTableSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class CarsSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_cars_table_is_seeded_correctly()
    {
        $this->seed(CarsTableSeeder::class);

        $this->assertDatabaseHas('cars', [
            'make' => 'Ford',
            'model' => 'Fiesta',
            'year' => 2010,
            'license_plate' => '12-AB-CD',
        ]);

        $this->assertDatabaseHas('cars', [
            'make' => 'Volkswagen',
            'model' => 'Golf',
            'year' => 2015,
            'license_plate' => '34-EF-GH',
        ]);

        $this->assertDatabaseHas('cars', [
            'make' => 'Audi',
            'model' => 'A3',
            'year' => 2018,
            'license_plate' => '56-IJ-KL',
        ]);
    }
}
