<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitanteRequest extends FormRequest
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
            'condominio_id' => 'required',
            'unidade_id' => 'required',
            'nome' => 'required',
            'rg' => 'required|numeric',
            'data_entrada'=> 'date'
        ];
    }

    public function messages(){
        return [
            'condominio_id.required' => 'Campo Condominio é obrigatório',
            'unidade_id.required' => 'Campo Unidade é obrigatório',
            'nome.required' => 'Campo Nome é obrigatório',
            'rg.required' => 'Campo RG é obrigatório',
            'rg.numeric' => 'Campo RG é numérico',
            'data_entrada.date'=> 'Formato do campo Data de Entrada inválido. Ex: 2019-12-31'
            ];
    }
}
