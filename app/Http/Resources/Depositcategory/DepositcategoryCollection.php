<?php

namespace App\Http\Resources\Depositcategory;

use Illuminate\Http\Resources\Json\Resource;

class DepositcategoryCollection extends Resource
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
                'link' => route('depositcategories.show',$this->id)
            ]
        ];
    }
}
