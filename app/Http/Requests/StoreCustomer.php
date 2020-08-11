<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomer extends FormRequest
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
            'code' => 'required|unique:customers,code|max:15',
            'name' => 'required',
            'email' => 'nullable|email',
            'phone1' => 'required|max:10'
        ];
    }

    public function messages(){
        return [
            'code.required' => 'El código es requerido',
            'code.unique' => 'El código ya existe',
            'code.max' => 'El código debe tener máximo 15 caracteres',
            'name.required' => 'El nombre es requerido',
            'email|email' => 'Este no es un email válido',
            'phone1.required' => 'El teléfono es requerido',
            'phone1.max' => 'Máximo 10 números'
        ];
    }
}
