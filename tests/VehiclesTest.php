<?php

use App\Vehicle;
use Laravel\Lumen\Testing\DatabaseMigrations;

class VehiclesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_returns_a_list_of_vehicles()
    {
        factory(Vehicle::class, 10)->create();

        $response = $this->get('vehicles');

        $response->assertResponseStatus(200);

        $response->seeJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'engine_displacement',
                    'engine_displacement_value',
                    'engine_displacement_uom',
                    'engine_power',
                ]
            ]
        ]);
    }
    
    /** @test */
    public function it_can_create_a_vehicle()
    {
        $response = $this->post('vehicles', [
            'name' => 'Car',
            'engine_displacement_value' => 1.5,
            'engine_displacement_uom' => 'L',
            'engine_power' => 3.5,
        ]);

        $response->assertResponseStatus(201);

        $this->seeInDatabase('vehicles', [
            'id' => 1,
            'name' => 'Car',
            'engine_displacement_value' => 1.5,
            'engine_displacement_uom' => 'L',
            'engine_power' => 3.5,
        ]);

        $response->seeJsonEquals([
            'data' => [
                'id' => 1,
                'name' => 'Car',
                'engine_displacement' => '1.5 L',
                'engine_displacement_value' => 1.5,
                'engine_displacement_uom' => 'L',
                'engine_power' => 3.5,
            ]
        ]);
    }
}
