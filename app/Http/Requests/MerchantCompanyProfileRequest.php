<?php

namespace ITreat\Http\Requests;

use ITreat\Traits\FormRequestValidate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class MerchantCompanyProfileRequest extends FormRequest
{
    use FormRequestValidate;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'merchant_id'                       => 'string|required',
            'merchant_category_id'              => 'string|required',
            'merchant_subcategory_id'           => 'string|required',
            'merchant_about_company'            => 'string|required',
            'merchant_discount_offer_id'        => 'string|required',
            'merchant_discount_description'     => 'string|required',
            'merchant_googlelocator_longitude'  => 'string|required',
            'merchant_googlelocator_latitude'   => 'string|required',
            'merchant_shop_open_from'           => 'string|required',
            'merchant_shop_open_to'             => 'string|required',
            'merchant_shop_timing_from'         => 'string|required',
            'merchant_shop_timing_to'           => 'string|required',
            'merchant_shop_closed_every'        => 'string|required',
            'merchant_logo'                     => 'string|required',
            'merchant_image_slider1'            => 'string|required',
            'merchant_image_slider2'            => 'string|required',
            'merchant_image_slider3'            => 'string|required',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $this->transform($validator);
    }
}
