<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'license_number' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{6}'),
        ];
    }
}
