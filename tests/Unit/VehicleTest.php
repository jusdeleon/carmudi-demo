<?php

class VehicleTest extends TestCase
{
    /** @test */
    public function it_has_an_engine_displacement_attribute()
    {
        $vehicle = factory(\App\Vehicle::class)->make([
            'engine_displacement_value' => 1.5,
            'engine_displacement_uom' => 'CC',
        ]);

        $this->assertEquals('1.5 CC', $vehicle->engine_displacement);
    }
}