<?php
namespace ITreat\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

trait FormRequestValidate
{
    public function transform($validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(
            [
                'status' => 'error',
                'message' => collect($errors)->flatten(1)->first()
            ],
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}