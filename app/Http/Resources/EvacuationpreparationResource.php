<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EvacuationpreparationResource extends JsonResource
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
            'client' => $this->client_id,
            'evacuationRequest' => $this->ev_req_id,
            'sealNumber' => $this->seal_number,
            'containerType' => $this->container_type_id,
            'cashCategory' => $this->category_id,
            'currency' => $this->currency_id,
            'cashCategory' => $this->category_id,
            'cash1000' => $this->cash_1000,
            'cash1000Amount' => $this->cash_1000_amount,
            'cash500' => $this->cash_500,
            'cash500Amount' => $this->cash_500_amount,
            'cash200' => $this->cash_200,
            'cash200Amount' => $this->cash_200_amount,
            'cash100' => $this->cash_100,
            'cash100Amount' => $this->cash_100_amount,
            'cash50' => $this->cash_50,
            'cash50Amount' => $this->cash_50_amount,
            'cash20' => $this->cash_20,
            'cash20Amount' => $this->cash_20_amount,
            'cash10' => $this->cash_10,
            'cash10Amount' => $this->cash_10_amount,
            'cash5' => $this->cash_5,
            'cash5Amount' => $this->cash_5_amount,
            'cash1' => $this->cash_1,
            'cash1Amount' => $this->cash_1_amount,
            'totalAmount' => $this->total_amount,
            'clientRep' => $this->client_rep,
            'isDeleted' => $this->is_deleted,
            'deletedBy' => $this->deleted_by,
            'deletedOn' => $this->deleted_on,
            'amountConfirmed' => $this->total_amount_bc,
            'bundleConfirmed' => $this->is_bceed,
            'isPickedUp' => $this->is_pickedup,
            'pickedUpBy' => $this->pickedup_by,
            'pickedUpOn' => $this->pickedup_on,
            'isHandedOver' => $this->is_handed_over,
            'handOverBy' => $this->is_handed_over_by,
            'handOverOn' => $this->is_handed_over_on,
            'bagOpened' => $this->is_opened,
        ];
    }
}
