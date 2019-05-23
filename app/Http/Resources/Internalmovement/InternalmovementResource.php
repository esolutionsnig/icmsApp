<?php

namespace App\Http\Resources\Internalmovement;

use Illuminate\Http\Resources\Json\JsonResource;

class InternalmovementResource extends JsonResource
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
            'sourceLocation' => $this->source_location,
            'destinationLocation' => $this->destination_location,
            'sealNumber' => $this->seal_number,
            'receivedBy' => $this->received_by,
            'receivedOn' => $this->received_on,
            'movementStatus' => $this->movement_status,
            'opened' => $this->is_opened,
            'bundleConfirmed' => $this->bc,
            'movedOut' => $this->is_moved_out,
            'addedBy' => $this->added_by
        ];
    }
}
