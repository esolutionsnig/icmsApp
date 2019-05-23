<?php

namespace App\Http\Resources\Internalmovement;

use Illuminate\Http\Resources\Json\Resource;

class InternalmovementCollection extends Resource
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
            'sourceLocation' => $this->source_location,
            'destinationLocation' => $this->destination_location,
            'sealNumber' => $this->seal_number,
            'middlemovementStatusname' => $this->movement_status,
            'href' => [
                'link' => route('internalmovements.show',$this->id)
            ]
        ];
    }
}
