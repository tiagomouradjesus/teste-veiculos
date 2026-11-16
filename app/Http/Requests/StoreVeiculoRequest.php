<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVeiculoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'modelo' => 'required|string|max:100',
            'data_aquisicao' => 'required|date',
            'placa' => 'required|string|max:15|unique:veiculos,placa',
            'tipo_acessibilidade_id' => ['required', 'exists:tipos_acessibilidade,id'],

        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'max' => 'O campo :attribute aceita no máximo :max caracteres.',
            'placa.unique' => 'Essa placa já está cadastrada.',
            'date' => 'Informe uma data válida.',
            'exists' => 'Tipo de acessibilidade inválido.',
        ];
    }
}
