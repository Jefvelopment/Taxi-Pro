<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CarsMigrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_db_has_table_cars()
    {
        $this->assertTrue(Schema::hasTable('cars'));
    }

    public function test_cars_table_has_expected_columns()
    {
        $columns = ['id', 'make', 'model', 'year', 'license_plate'];
        foreach ($columns as $column) {
            $this->assertTrue(Schema::hasColumn('cars', $column));
        }
    }
}
