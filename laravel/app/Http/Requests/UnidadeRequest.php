<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnidadeRequest extends FormRequest
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
            'numero_unidade' => 'required|unique:unidades',
            'proprietario'  => 'required',
            'cpf'  => 'required|numeric',
            'email'  => 'required',
            'telefone'  => 'required|numeric',
            'condominio_id'  => 'required'
        ];
    }

    public function messages()
    {
        return[
          'numero_unidade.required' => 'Campo Unidade é obrigatório',
          'numero_unidade.unique' => 'Essa unidade já existe',
          'proprietario.required' => 'Campo Proprietário é obrigatório',
          'cpf.required' => 'Campo CPF é obrigatório',
          'cpf.numeric' => 'Campo CPF é numérico',
          'email.required' => 'Campo Email é obrigatório',
          'telefone.required' => 'Campo Telefone é obrigatório',
          'telefone.numeric' => 'Campo Telefone é numérico',
          'condominio_id.required' => 'Campo Condominio é obrigatório'
        ];

    }
}
