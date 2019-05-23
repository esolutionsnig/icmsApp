<?php

namespace App\Http\Resources\Supply;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplyResource extends JsonResource
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
            'clientId' => $this->client_id,
            'title' => $this->sr_title,
            'type' => $this->sr_type,
            'status' => $this->sr_status,
            'href' => [
                'supplybranches' => route('supplybranches.index',$this->id)
            ]
        ];
    }
}
