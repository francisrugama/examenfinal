<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Spare_usedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'part_code'=> ['required','string','min:8', 'max:20', Rule::unique('spares_useds')->ignore($this->spare_used)],
            'brand'=> 'required|string|min:3|max:55',
            'warranty_period'=> 'required|string|min:3|max:55',
            'supplier_name'=> 'required|string|min:20|max:255',
            'maintenance_record_id'=> 'required',
        ];
    }
    public function massages(): array
    {
        return [
            'part_code.required'=> 'El código de pieza del veiculo es requerido.',
            'part_code.unique'=> 'El codigo de pieza del veiculo es unico.',
            'part_code.string'=> 'El código de pieza debe contener solo caracteres.',
            'part_code.min'=> 'El código de pieza debe tener un minimo de 8 caracteres.',
            'part_code.max'=> 'El código de pieza debe de tener un maximo de 20 caracteres.',

            'brand.required'=> 'La marca del veiculo es requerido.',
            'brand.string'=> 'La marca debe contener solo caracteres',
            'brand.min'=> 'La marca solo tiene un minimo de 3 caracteres.',
            'brand.max'=> 'La marca solo tiene un maximo de 55 caracteres.',

            'warranty_period.required'=> 'El período de garantía del veiculo es requerido.',
            'warranty_period.string'=> 'El período de garantía del veiculo debe tener solo caracteres.',
            'warranty_period.min'=> 'El período de garantía del veiculo tiene un minimo de 3 caracteres.',
            'warranty_period.max'=> 'El período de garantía del veiculo tiene un maximo de 55 caracteres.',

            'supplier_name.required'=> 'El nombre del proveedor es requerido.',
            'supplier_name.string'=> 'El nombre del proveedor debe tener solo caracteres.',
            'supplier_name.min'=> 'El nombre del proveedor tiene un minimo de 3 caracteres.',
            'supplier_name.max'=> 'El nombre del proveedor tiene un maximo de 55 caracteres.',

            'maintenance_record_id.required'=> 'la fecha de entrada del registro de mantenimiento es requerido.',
        ];
    }
}
