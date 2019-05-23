<?php

namespace App\Http\Resources\Consignmentlocation;

use Illuminate\Http\Resources\Json\Resource;

class ConsignmentlocationCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'isBankView' => $this->bankview,
            'WorkStation' => $this->workstation,
            'href' => [
                'link' => route('consignmentlocations.show',$this->id)
            ]
        ];
    }
}
