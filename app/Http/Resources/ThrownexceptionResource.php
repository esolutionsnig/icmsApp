<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ThrownexceptionResource extends JsonResource
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
            'bundleConfirmationId' => $this->bundleconfirmation_id,
            'sealNumber' => $this->seal_number,
            'currency' => $this->currency,
            'denomination' => $this->denomination,
            'expectedAmount' => $this->expected_Amount,
            'actualAmount' => $this->actual_amount,
            'thrownBy' => $this->thrown_by,
            'thrownOn' => $this->thrown_on,
            'thrownComment' => $this->thrown_comment,
            'thrownTo' => $this->thrown_to,
            'reviewedBy' => $this->reviewed_by,
            'reviewedOn' => $this->reviewed_on,
            'reviewedComment' => $this->reviewed_comment,
            'status' => $this->ex_status,
        ];
    }
}
