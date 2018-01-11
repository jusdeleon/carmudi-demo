<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class VehicleResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'engine_displacement' => $this->engine_displacement,
            'engine_displacement_value' => $this->engine_displacement_value,
            'engine_displacement_uom' => $this->engine_displacement_uom,
            'engine_power' => $this->engine_power,
        ];
    }
}