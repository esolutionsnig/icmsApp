<?php

namespace App\Http\Resources\Cashallocation;

use Illuminate\Http\Resources\Json\JsonResource;

class CashallocationResource extends JsonResource
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
            'allocatedTo' => $this->allocated_to,
            'workStation' => $this->workstation,
            'sealNumber' => $this->seal_number,
            'clientId' => $this->client_name,
            'auditTrailNumber' => $this->audit_trail_number,
            'currencyId' => $this->currency_id,
            'denominationId' => $this->denomination_id,
            'amountAllocated' => $this->amount_allocated,
            'allocatedBy' => $this->allocated_by,
            'allocatedOn' => $this->allocated_on,
            'amountReturned' => $this->amount_returned,
            'returnedBy' => $this->returned_by,
            'returnedOn' => $this->returned_on,
            'cashAllocatorComment' => $this->ca_comment,
            'processor' => $this->returned_user,
            'assignedShift' => $this->ca_shift,
            'fit' => $this->is_fit,
            'unfit' => $this->is_unfit,
            'atm' => $this->is_atm,
            'declaredValue' => $this->declared_value,
            'shortage' => $this->shortage,
            'comment' => $this->comment,
            'attachedFile' => $this->evidence,
            'mixUps' => $this->mixups,
            '1000MixUps' => $this->m1000,
            '500MixUps' => $this->m500,
            '200MixUps' => $this->m200,
            '100MixUps' => $this->m100,
            '50MixUps' => $this->m50,
            '20MixUps' => $this->m20,
            '10MixUps' => $this->m10,
            '5MixUps' => $this->m5,
            '1MixUps' => $this->m1,
            'fakeNotes' => $this->fake_notes,
            'fakeNoteSerialNumbers' => $this->fake_serial_numbers,
            'stateOfCash' => $this->state_of_cash,
            'oldSealNumber' => $this->old_seal_number,
        ];
    }
}
