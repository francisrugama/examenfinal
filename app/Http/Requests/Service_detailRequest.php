<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Service_detailRequest extends FormRequest
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
            'service_type'=> 'required|string|min:3|max:55',
            'tool_used'=> 'required|string|min:3|max:55',
            'warranty_service'=> 'required|string|max:55',
            'observations'=> 'required|string|max:255',
            'technican_id'=> 'required',
            'maintenance_record_id'=> 'required',
        ];
    }
    public function massages(): array
    {
        return [
            'service_type.required'=> 'El tipo de servicio en el veiculo es requerido.',
            'service_type.string'=> 'El tipo de servicio en el veiculo debe tener solo caracteres.',
            'service_type.min'=> 'El tipo de servicio del veiculo tiene un minimo de 3 caracteres.',
            'service_type.max'=> 'El tipo de servicio del veiculo tiene un maximo de 55 caracteres.',

            'tool_used.required'=> 'Las herramientas usades en el veiculo es requerido.',
            'tool_used.string'=> 'Las herramientas usades en el veiculo debe tener solo caracteres.',
            'tool_used.min'=> 'Las herramientas usades veiculo tiene un minimo de 3 caracteres.',
            'tool_used.max'=> 'Las herramientas usades veiculo tiene un maximo de 55 caracteres.',

            'warranty_service.required'=> 'El servicio de garantia del veiculo es requerido.',
            'warranty_service.string'=> 'El servicio de garantia del veiculo debe tener solo caracteres.',
            'warranty_service.min'=> 'El servicio de garantia del veiculo tiene un minimo de 3 caracteres.',
            'warranty_service.max'=> 'El servicio de garantia del veiculo tiene un maximo de 55 caracteres.',

            'observations.required'=> 'Las observaciones del trabajo del veiculo es requerido.',
            'observations.string'=> 'Las observaciones del trabajo debe tener solo caracteres.',
            'observations.max'=> 'Las observaciones del trabajo tiene un maximo de 255 caracteres.',

            'technican_id.required'=> 'El nombre del técnico es requerido.',

            'maintenance_record_id.required'=> 'la fecha de entrada del registro de mantenimiento es requerido.',
        ];
    }
}
