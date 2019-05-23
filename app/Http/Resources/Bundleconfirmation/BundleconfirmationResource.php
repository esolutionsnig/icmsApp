<?php

namespace App\Http\Resources\Bundleconfirmation;

use Illuminate\Http\Resources\Json\JsonResource;

class BundleconfirmationResource extends JsonResource
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
            'title' => $this->bc_title,
            'client' => $this->client_id,
            'stream' => $this->strim,
            'consignmentLocation' => $this->conslocation,
            'auditTrailNumber' => $this->audit_trail_number,
            'addedBy' => $this->added_by,
            'confirmationDone' => $this->confirmation_done,
            'endedOn' => $this->ended_on,
            'referenceNumber' => $this->reference_number,
            'href' => [
                'bundleconfirmationbags' => route('bundleconfirmationbags.index',$this->id),
                'thrownexceptions' => route('thrownexceptions.index',$this->id)
            ]
        ];
    }
}
