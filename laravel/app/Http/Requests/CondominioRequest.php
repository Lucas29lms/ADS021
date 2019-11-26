<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CondominioRequest extends FormRequest
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
            'nome' => 'required',
            'cnpj' => 'required',
            'endereco' => 'required',
            'cep' => 'required|numeric',
            'bairro'=> 'required',
            'cidade'=> 'required',
            'uf'=> 'required'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Campo Nome é obrigatório',
            'cnpj.required' => 'Campo CNPJ é obrigatório',
            'endereco.required' => 'Campo Endereço é obrigatório',
            'cep.required' => 'Campo CPF é obrigatório',
            'cep.numeric' => 'Campo CPF é numérico',
            'bairro.required'=> 'Campo Bairro é obrigatório',
            'cidade.required'=> 'Campo Cidade é obrigatório',
            'uf.required'=> 'Campo UF é obrigatório'
        ];
    }
}
