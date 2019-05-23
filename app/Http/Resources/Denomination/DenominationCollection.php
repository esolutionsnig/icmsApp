<?php

namespace App\Http\Resources\Denomination;

use Illuminate\Http\Resources\Json\Resource;

class DenominationCollection extends Resource
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
            'href' => [
                'link' => route('denominations.show',$this->id)
            ]
        ];
    }
}
