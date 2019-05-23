<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplybranchResource extends JsonResource
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
            'supplyId' => $this->supply_id,
            'clientId' => $this->client,
            'branchId' => $this->branch,
            'currencyId' => $this->currency,
            'denominationId' => $this->denomination,
            'cashCategoryId' => $this->cash_category,
            'totalAmount' => $this->amount,
            'amountProcessed' => $this->processed_amount,
            'requestedBy' => $this->request_by,
            'requestedOn' => $this->request_on,
            'isDeleted' => $this->is_deleted,
            'isDispatchedOn' => $this->is_dispatchedBy,
            'isDispatchedBy' => $this->is_dispatchedOn,
            'citOfficer' => $this->cit_officer,
            'citVehicle' => $this->cit_vehicle,
            'isDelivered' => $this->is_delivered,
            'isDeliveredOn' => $this->is_deliveredOn,
            'isDeliveredBy' => $this->is_deliveredBy,
            'status' => $this->srb_status,
            'isPacked' => $this->is_packed,
            'isPackedBy' => $this->is_packed_by,
            'isPackedOn' => $this->is_packed_on,
            'isSplitted' => $this->is_splitted,
            'sealNumber' => $this->seal_number,
        ];
    }
}
