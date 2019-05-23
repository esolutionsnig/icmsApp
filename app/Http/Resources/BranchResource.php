<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
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
            'name' => $this->branch_location,
            'code' => $this->branch_location_code,
            'cmu' => $this->branch_cmu,
            'rep' => $this->branch_rep,
        ];
    }
}