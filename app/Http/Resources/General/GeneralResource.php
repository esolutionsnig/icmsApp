<?php

namespace App\Http\Resources\General;

use Illuminate\Http\Resources\Json\JsonResource;

class GeneralResource extends JsonResource
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
            'userId' => $this->username,
            'surname' => $this->surname,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'dateOfBirth' => $this->dob,
            'gender' => $this->gender,
            'phoneNumber' => $this->phoneNumber,
            'address' => $this->address,
            'state' => $this->state,
            'country' => $this->country,
            'occupation' => $this->occupation,
            'profile' => $this->profile,
            'dp' => $this->dp
        ];
    }
}
