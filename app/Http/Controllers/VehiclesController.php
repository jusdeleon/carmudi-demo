<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\Http\Resources\VehicleResource;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VehiclesController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return VehicleResource::collection($vehicles);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'engine_displacement_value' => 'required|numeric',
            'engine_displacement_uom' => [
                'required',
                Rule::in(Vehicle::ENGINE_DISPLACEMENT_UOMS)
            ],
            'engine_power' => 'required|numeric',
        ]);

        $vehicle = Vehicle::create($request->all());

        return new VehicleResource($vehicle);
    }
}