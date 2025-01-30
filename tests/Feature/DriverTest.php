<?php

namespace Tests\Feature;

use App\Models\Driver;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DriverTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_drivers_index()
    {
        // Create some test drivers
        Driver::factory()->count(3)->create();

        // Visit the index page
        $response = $this->get(route('drivers.index'));

        // Assert the response is successful
        $response->assertStatus(200);
        // Assert we can see the drivers table
        $response->assertViewIs('drivers.index');
        $response->assertSee('Drivers');
    }

    public function test_can_create_driver()
    {
        // Visit the create page
        $response = $this->get(route('drivers.create'));
        $response->assertStatus(200);

        // Submit the form
        $driverData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'license_number' => 'DL123456',
        ];

        $response = $this->post(route('drivers.store'), $driverData);

        // Assert the driver was created
        $this->assertDatabaseHas('drivers', $driverData);
        $response->assertRedirect(route('drivers.index'));
    }

    public function test_can_show_driver()
    {
        // Create a test driver
        $driver = Driver::factory()->create();

        // Visit the show page
        $response = $this->get(route('drivers.show', $driver));

        // Assert the response is successful
        $response->assertStatus(200);
        $response->assertViewIs('drivers.show');
        $response->assertSee($driver->name);
    }

    public function test_can_edit_driver()
    {
        // Create a test driver
        $driver = Driver::factory()->create();

        // Visit the edit page
        $response = $this->get(route('drivers.edit', $driver));
        $response->assertStatus(200);

        // Submit the update form
        $updatedData = [
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
            'phone' => '9876543210',
            'license_number' => 'DL654321',
        ];

        $response = $this->put(route('drivers.update', $driver), $updatedData);

        // Assert the driver was updated
        $this->assertDatabaseHas('drivers', $updatedData);
        $response->assertRedirect(route('drivers.index'));
    }

    public function test_can_delete_driver()
    {
        // Create a test driver
        $driver = Driver::factory()->create();

        // Delete the driver
        $response = $this->delete(route('drivers.destroy', $driver));

        // Assert the driver was deleted
        $this->assertDatabaseMissing('drivers', ['id' => $driver->id]);
        $response->assertRedirect(route('drivers.index'));
    }

    public function test_validates_required_fields_on_create()
    {
        // Submit form with empty data
        $response = $this->post(route('drivers.store'), []);

        // Assert validation errors
        $response->assertSessionHasErrors(['name', 'email', 'phone', 'license_number']);
    }

    public function test_validates_required_fields_on_update()
    {
        // Create a test driver
        $driver = Driver::factory()->create();

        // Submit update with empty data
        $response = $this->put(route('drivers.update', $driver), []);

        // Assert validation errors
        $response->assertSessionHasErrors(['name', 'email', 'phone', 'license_number']);
    }
}
