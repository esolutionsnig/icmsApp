<?php

namespace App\Http\Resources\Bank;

use Illuminate\Http\Resources\Json\Resource;

class BankCollection extends Resource
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
            'name' => $this->bank_name,
            'code' => $this->bank_code,
            'href' => [
                'link' => route('banks.show',$this->id)
            ]
        ];
    }
}
