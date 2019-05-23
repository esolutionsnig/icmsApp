<?php

namespace App\Http\Resources\Bank;

use Illuminate\Http\Resources\Json\JsonResource;

class BankResource extends JsonResource
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
            'name' => $this->bank_name,
            'code' => $this->bank_code,
            'addedBy' => $this->added_by,
            'href' => [
                'branches' => route('branches.index', $this->id),
                'bookballance' => route('ballances.index',$this->id),
                'reps' => route('reps.index',$this->id)
            ]
        ];
    }
}
