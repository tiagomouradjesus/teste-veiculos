<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class UpdateVeiculoRequest extends StoreVeiculoRequest
{
    public function rules(): array
    {
        $rules = parent::rules();
        $rules['placa'] = [
            'required', 'string', 'max:15',
            Rule::unique('veiculos', 'placa')->ignore($this->route('veiculo')),
        ];

        return $rules;
    }
}


