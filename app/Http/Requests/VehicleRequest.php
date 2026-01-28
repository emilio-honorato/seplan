<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer|max:' . (date('Y')),
            'preco' => 'required|numeric|min:0',
            'descricao' => 'nullable|string',
        ];
    }
}
