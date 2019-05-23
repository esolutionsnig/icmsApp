<?php

namespace App\Http\Resources\Sealing;

use Illuminate\Http\Resources\Json\Resource;

class SealingCollection extends Resource
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
            'stream' => $this->strim,
            'title' => $this->sealing_title,
            'client' => $this->client,
            'amount' => $this->amount,
            'sealNumber' => $this->seal_number,
            'href' => [
                'link' => route('sealings.show',$this->id)
            ]
        ];
    }
}
