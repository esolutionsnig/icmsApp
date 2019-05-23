<?php

namespace App\Http\Resources\Vehicle;

use Illuminate\Http\Resources\Json\Resource;

class VehicleCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'number' => $this->number,
            'href' => [
                'link' => route('vehicles.show',$this->id)
            ]
        ];
    }
}
