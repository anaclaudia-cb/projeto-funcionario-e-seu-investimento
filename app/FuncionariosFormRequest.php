<?php

namespace App;

use Illuminate\Foundation\Http\FormRequest;

class FuncionariosFormRequest extends FormRequest
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
            'name' => 'required|min:2',
            'email' => 'required|email|unique:funcionarios,email|min:2'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'name.min' => 'O campo nome precisa ter pelo menos 2 caracteres'
        ];
    }
}
