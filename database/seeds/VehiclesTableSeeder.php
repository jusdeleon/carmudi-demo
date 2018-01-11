<?php

use App\Vehicle;
use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = [
            [
                'name' => 'Car A',
                'engine_displacement_value' => 1.0,
                'engine_displacement_uom' => 'L',
                'engine_power' => 1.5,
            ],
            [
                'name' => 'Car B',
                'engine_displacement_value' => 2.0,
                'engine_displacement_uom' => 'CC',
                'engine_power' => 2.5,
            ],
            [
                'name' => 'Car C',
                'engine_displacement_value' => 5,
                'engine_displacement_uom' => 'CID',
                'engine_power' => 3,
            ],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}
