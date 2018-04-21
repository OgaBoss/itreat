<?php

namespace ITreat\Http\Requests;

use ITreat\Traits\FormRequestValidate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class MerchantRequest extends FormRequest
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
            'user_id'                           => 'required|string',
            'merchant_category_id'              => 'required|string',
            'merchant_discount_offer_id'        => 'required|string',
            'merchant_company_name'             => 'required|string',
            'merchant_contact_number'           => 'required|string',
            'merchant_company_email'            => 'required|string',
            'merchant_shop_address'             => 'required|string',
            'merchant_reg_details_id'           => 'required|string',
            'sales_user_id'                     => 'required|string',
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
