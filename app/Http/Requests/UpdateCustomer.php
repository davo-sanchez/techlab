<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomer extends FormRequest
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
            'code' => [
                'required',
                Rule::unique('customers','code')->ignore($this->customerid)
            ],
            'name' => 'required',
            'email' => 'nullable|email',
            'phone1' => 'required'
        ];
    }

    public function messages(){
        return [
            'code.required' => 'El código es requerido',
            'code.unique' => 'El código ya existe',
            'code.max' => 'El código debe tener máximo 15 caracteres',
            'name.required' => 'El nombre es requerido',
            'email|email' => 'Este no es un email válido',
            'phone1' => 'El teléfono es requerido'
        ];
    }
}
