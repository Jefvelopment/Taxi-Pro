<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            ['make' => 'Ford', 'model' => 'Fiesta', 'year' => 2010, 'license_plate' => '12-AB-CD'],
            ['make' => 'Volkswagen', 'model' => 'Golf', 'year' => 2015, 'license_plate' => '34-EF-GH'],
            ['make' => 'Audi', 'model' => 'A3', 'year' => 2018, 'license_plate' => '56-IJ-KL'],
        ];

        DB::table('cars')->insert($cars);
    }
}
