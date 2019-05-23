<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BundleconfirmationbagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'bundleConfirmationId' => $this->bundleconfirmation_id,
            'client' => $this->client,
            'branch' => $this->branch,
            'sealNumber' => $this->seal_number,
            'currency' => $this->currency,
            'den1000' => $this->d1000,
            'den1000Category' => $this->d1000_category,
            'den1000Amount' => $this->d1000_amount,
            'den500' => $this->d500,
            'den500Category' => $this->d500_category,
            'den500Amount' => $this->d500_amount,
            'den200' => $this->d200,
            'den200Category' => $this->d200_category,
            'den200Amount' => $this->d200_amount,
            'den100' => $this->d100,
            'den100Category' => $this->d100_category,
            'den100Amount' => $this->d100_amount,
            'den50' => $this->d50,
            'den50Category' => $this->d50_category,
            'den50Amount' => $this->d50_amount,
            'den20' => $this->d20,
            'den20Category' => $this->d20_category,
            'den20Amount' => $this->d20_amount,
            'den10' => $this->d10,
            'den10Category' => $this->d10_category,
            'den10Amount' => $this->d10_amount,
            'den5' => $this->d5,
            'den5Category' => $this->d5_category,
            'den5Amount' => $this->d5_amount,
            'den1' => $this->d1,
            'den1Category' => $this->d1_category,
            'den1Amount' => $this->d1_amount,
            'totalAmount' => $this->amount,
            'addedBy' => $this->added_by,
            'href' => [
                'bundleconfirmationbags' => route('bundleconfirmationbags.index',$this->id)
            ]
        ];
    }
}
