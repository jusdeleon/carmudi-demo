<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    const ENGINE_DISPLACEMENT_UOMS = [
        'L',
        'CC',
        'CID'
    ];

    public $timestamps = false;

    protected $fillable = [
        'name',
        'engine_displacement_value',
        'engine_displacement_uom',
        'engine_power',
    ];

    public function getEngineDisplacementAttribute()
    {
        return $this->engine_displacement_value . ' ' . $this->engine_displacement_uom;
    }
}