<?php

namespace App\Http\Resources\Deposittype;

use Illuminate\Http\Resources\Json\Resource;

class DeposittypeCollection extends Resource
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
                'link' => route('deposittypes.show',$this->id)
            ]
        ];
    }
}
