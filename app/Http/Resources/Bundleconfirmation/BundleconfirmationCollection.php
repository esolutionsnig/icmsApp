<?php

namespace App\Http\Resources\Bundleconfirmation;

use Illuminate\Http\Resources\Json\Resource;

class BundleconfirmationCollection extends Resource
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
                'link' => route('bundleconfirmations.show',$this->id)
            ]
        ];
    }
}
