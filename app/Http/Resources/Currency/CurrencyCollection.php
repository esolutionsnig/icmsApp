<?php

namespace App\Http\Resources\Currency;

use Illuminate\Http\Resources\Json\Resource;

class CurrencyCollection extends Resource
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
            'slug' => $this->slug,
            'href' => [
                'link' => route('currencies.show',$this->id)
            ]
        ];
    }
}
