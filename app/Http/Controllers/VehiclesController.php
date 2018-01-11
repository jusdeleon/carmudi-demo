<?php

namespace App\Http\Controllers;

use App\Vehicle;

class VehiclesController extends Controller
{
    public function index()
    {
        return Vehicle::all();
    }
}