<?php

namespace App\Http\Resources\Containertype;

use Illuminate\Http\Resources\Json\Resource;

class ContainertypeCollection extends Resource
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
                'link' => route('containertypes.show',$this->id)
            ]
        ];
    }
}
