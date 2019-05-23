<?php

namespace App\Http\Resources\Supply;

use Illuminate\Http\Resources\Json\Resource;

class SupplyCollection extends Resource
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
            'clientId' => $this->client_id,
            'title' => $this->sr_title,
            'type' => $this->sr_type,
            'status' => $this->sr_status,
            'href' => [
                'link' => route('supplies.show',$this->id)
            ]
        ];
    }
}
