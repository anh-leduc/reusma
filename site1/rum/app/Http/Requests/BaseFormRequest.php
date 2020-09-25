<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Response;

class BaseFormRequest extends FormRequest
{
    protected $returnCode = 2;
    public $errorCode = 400;
    protected $httpStatusCode = 400;
    protected $successCode = 200;
    protected $unauthorizedCode = 401;
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

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
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $response = [];
        foreach ($errors as $key => $filed) {
            foreach ($filed as $key => $err) {
                if (!in_array($err, $response)) {
                    $response[] = $err;
                }
            }
        }
//      $response = join(', ', $response);
       // \Log::warning("Validation fail: ".print_r($response,true));

        throw new HttpResponseException(
            response()->json(
                ['status_code' => $this->returnCode,
                'message' =>  $response]
                ));
    }
    
    /**
     * Get protected value of this request.
     *
     * @return value
     */
    public function returnCode()
    {
        return $this->returnCode;
    }
    /**
     * Get protected value of this request.
     *
     * @return value
     */
    public function errorCode()
    {
        return $this->errorCode;
    }
    /**
     * Get protected value of this request.
     *
     * @return value
     */
    public function httpStatusCode()
    {
        return $this->httpStatusCode;
    }
    /**
     * Get protected value of this request.
     *
     * @return value
     */
    public function successCode()
    {
        return $this->successCode;
    }
    /**
     * Get protected value of this request.
     *
     * @return value
     */
    public function unauthorizedCode()
    {
        return $this->unauthorizedCode;
    }
}
