<?php

namespace ITreat\Http\Requests;

use ITreat\Traits\FormRequestValidate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class CustomerActivityRequest extends FormRequest
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
            'customer_id'           => 'required|string',
            'merchant_id'           => 'required|string',
            'total_bill'            => 'required|string',
            'bill_after_discount'   => 'required|string',
            'discount_value'        => 'required|string',
            'date'                  => 'required|string',
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
