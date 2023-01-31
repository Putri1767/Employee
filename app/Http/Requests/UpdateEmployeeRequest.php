<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();

        if($method == 'PUT') {
        return[
        'first_name' => ['required'], 
        'last_name' => ['required'],
        'gender' => ['required'],
        'bitrh_date' => ['required'],
        'hire_date' => ['required'],
        ];
    }else{
        return[
        'first_name' => ['sometimes', 'required'], 
        'last_name' => ['sometimes','required'],
        'gender' => ['sometimes','required'],
        'bitrh_date' => ['sometimes','required'],
        'hire_date' => ['sometimes','required'],
        ];
        }
    }
}
