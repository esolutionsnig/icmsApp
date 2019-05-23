<?php

namespace App\Http\Resources\Depositcategory;

use Illuminate\Http\Resources\Json\JsonResource;

class DepositcategoryResource extends JsonResource
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
