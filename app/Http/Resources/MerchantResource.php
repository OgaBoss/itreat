<?php

namespace ITreat\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class MerchantResource extends Resource
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
            "merchant_id"               => $this->merchant_id,
            'merchant_company_name'     => $this->merchant_company_name,
            'merchant_contact_number'   => $this->merchant_contact_number,
            'merchant_company_email'    => $this->merchant_company_email,
            'merchant_shop_address'     => $this->merchant_shop_address,
            'user'                      => $this->user,
            'sales_user_id'             => $this->sales_user_id,
            'merchant_discount_offer'   => $this->discount,
            'merchant_category'         => $this->category,
            'merchant_reg_details'      => $this->RegDetail,
        ];
    }
}
