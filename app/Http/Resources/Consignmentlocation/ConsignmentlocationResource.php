<?php

namespace App\Http\Resources\Consignmentlocation;

use Illuminate\Http\Resources\Json\JsonResource;

class ConsignmentlocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
        ];
    }
}
