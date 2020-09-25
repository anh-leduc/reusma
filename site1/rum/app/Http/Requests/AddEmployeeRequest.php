<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseFormRequest;

class AddEmployeeRequest extends BaseFormRequest
{
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
            'id' => 'required',
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'privillege' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'id_level' => 'required',
            'join_date' => 'required'
        ];
    }
}
