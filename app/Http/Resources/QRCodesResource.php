<?php

namespace ITreat\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class QRCodesResource extends Resource
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
            'customer_id'                           => $this->customer_id,
            'customer_mobile_number'                => $this->customer_mobile_number,
            'customer_email'                        => $this->customer_email,
            'customer_nationality'                  => $this->customer_nationality,
            'customer_activation_date'              => $this->customer_activation_date,
            'customer_membership_validation_date'   => $this->customer_membership_validation_date,
            'user'                                  => $this->user,
            'qr_codes'                              => $this->qrCode
        ];
    }
}
