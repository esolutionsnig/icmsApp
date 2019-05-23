<?php

namespace App\Http\Resources\Evacuation;

use Illuminate\Http\Resources\Json\JsonResource;

class EvacuationResource extends JsonResource
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
            'name' => $this->er_name,
            'client' => $this->bank_id,
            'branch' => $this->branch_id,
            'location' => $this->location_code,
            'consignmentLocation' => $this->consignment_location_id,
            'receivedBy' => $this->cit_reciever_id,
            'receiverToken' => $this->cit_confirmation_token,
            'vehicle' => $this->vehicle_id,
            'cit' => $this->cit,
            'citConfirmation' => $this->cit_confirmation,
            'citConfirmationDate' => $this->cit_confirmation_date,
            'clientRep' => $this->client_rep,
            'cashProcessed' => $this->cp_done,
            'status' => $this->er_status,
            'isPreannounced' => $this->preannounced,
            'executionDate' => $this->date_execution,
            'href' => [
                'evacuationpreparations' => route('evacuationpreparations.index', $this->id),
                'cits' => route('cits.index', $this->id)
            ],
        ];
    }
}
