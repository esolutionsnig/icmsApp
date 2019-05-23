<?php

namespace App\Http\Resources\General;

use Illuminate\Http\Resources\Json\Resource;

class GeneralCollection extends Resource
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
            'userId' => $this->username,
            'surname' => $this->surname,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'dateOfBirth' => $this->dob,
            'gender' => $this->gender,
            'phoneNumber' => $this->phoneNumber,
            'href' => [
                'link' => route('generals.show',$this->id)
            ]
        ];
    }
}
