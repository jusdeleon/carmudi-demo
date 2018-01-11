<?php

namespace App\Http\Controllers;

use App\Http\Resources\VehicleResource;
use App\Vehicle;

class VehiclesController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return VehicleResource::collection($vehicles);
    }
}