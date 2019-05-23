<?php

namespace App\Http\Resources\Sealing;

use Illuminate\Http\Resources\Json\JsonResource;

class SealingResource extends JsonResource
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
            'stream' => $this->strim,
            'title' => $this->sealing_title,
            'client' => $this->client,
            'location' => $this->location_id,
            'category' => $this->category_id,
            'container' => $this->container_id,
            'currency' => $this->currency_id,
            'denomination' => $this->denomination_id,
            'amount' => $this->amount,
            'sealNumber' => $this->seal_number,
            'addedBy' => $this->added_by,
            'addedOn' => $this->added_on,
            'opened' => $this->is_opened,
            'amountAllocated' => $this->total_amount_allocated,
            'processors' => $this->total_processors,
            'oldSsealNumber' => $this->old_seal_number,
            'batch' => $this->seal_batch,
            'totalAmountSealed' => $this->total_amount_sealed
        ];
    }
}
