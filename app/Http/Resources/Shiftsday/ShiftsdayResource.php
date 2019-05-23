<?php

namespace App\Http\Resources\Shiftsday;

use Illuminate\Http\Resources\Json\JsonResource;

class ShiftsdayResource extends JsonResource
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
            'dayId' => $this->day_id,
            'title' => $this->stitle,
            'shift' => $this->sshift,
            'started' => $this->sstarted,
            'startedBy' => $this->sstarted_by,
            'startedOn' => $this->sstarted_on,
            'closed' => $this->sclosed,
            'closed_by' => $this->sclosed_by,
            'closed_on' => $this->sclosed_on,
            'status' => $this->sstatus
        ];
    }
}
