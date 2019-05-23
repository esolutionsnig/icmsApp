<?php

namespace App\Http\Resources\Deposittype;

use Illuminate\Http\Resources\Json\JsonResource;

class DeposittypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name
        ];
    }
}
