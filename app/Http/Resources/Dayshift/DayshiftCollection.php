<?php

namespace App\Http\Resources\Dayshift;

use Illuminate\Http\Resources\Json\Resource;

class DayshiftCollection extends Resource
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
            'title' => $this->dstart_title,
            'day' => $this->dday,
            'shift' => $this->dshift,
            'started' => $this->dstarted,
            'startedBy' => $this->dstarted_by,
            'closed' => $this->dclosed,
            'closedBy' => $this->dclosed_by,
            'closedOn' => $this->dclosed_on,
            'href' => [
                'link' => route('dayshifts.show',$this->id)
            ]
        ];
    }
}
