<?php

namespace App\Http\Resources\Shiftsday;

use Illuminate\Http\Resources\Json\Resource;

class ShiftsdayCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
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
            'closed' => $this->sclosed,
            'href' => [
                'link' => route('shiftsdays.show',$this->id)
            ]
        ];
    }
}
