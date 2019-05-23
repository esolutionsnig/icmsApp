<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CitResource extends JsonResource
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
            'evacuationRequest' => $this->evacuation_id,
            'vehicleId' => $this->vehicle_id,
            'citOfficerId' => $this->cit_officer_id,
            'deliverStatus' => $this->delivery_status,
            'addedOn' => $this->added_on,
            'addedBy' => $this->added_by,
            'pickedUpBy' => $this->picked_up_by,
            'pickedUpOn' => $this->picked_up_on,
            'receivedBy' => $this->received_by,
            'receivedOn' => $this->received_on,
            'bundleConfirmed' => $this->bundle_confirmed,
            'bundleConfirmationComment' => $this->bundle_confirmed_comment,
            'bundleConfirmedBy' => $this->bundle_confirmed_by,
            'bundleConfirmedOn' => $this->bundle_confirmed_on,
            'bundleConfirmationStatus' => $this->bundle_confirmation_status,
            'oldSealNumber' => $this->old_seal_number,
        ];
    }
}
