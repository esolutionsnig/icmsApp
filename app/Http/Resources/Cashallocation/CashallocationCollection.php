<?php

namespace App\Http\Resources\Cashallocation;

use Illuminate\Http\Resources\Json\Resource;

class CashallocationCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'allocatedTo' => $this->allocated_to,
            'workStation' => $this->workstation,
            'sealNumber' => $this->seal_number,
            'clientId' => $this->client_name,
            'auditTrailNumber' => $this->audit_trail_number,
            'currencyId' => $this->currency_id,
            'denominationId' => $this->denomination_id,
            'amountAllocated' => $this->amount_allocated,
            'amountReturned' => $this->amount_returned,
            'processor' => $this->returned_user,
            'shift' => $this->ca_shift,
            'href' => [
                'link' => route('cashallocations.show',$this->id)
            ]
        ];
    }
}
