<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Maintenance_recordRequest extends FormRequest
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
            'entry_date'=> 'required|date',
            'delivery_date'=> 'required',
            'current_mileage'=> 'required|string|min:3|max:55',
            'work_description'=> 'required|string|max:255',
            'parts_cost'=> 'required|string|max:55',
            'labor_cost'=> 'required|string|max:55',
            'total_cost'=> 'required|string|max:55',
            'vehicle_id'=> 'required',
            'client_id'=> 'required',
            'technican_id'=> 'required',
        ];
    }
    public function massages(): array
    {
        return [
            'entry_date.required'=> 'Fecha del contrato del mantenimiento es requerido.',
            'entry_date.date'=> 'Fecha del contrato del mantenimiento es tiene que ser una fecha vailda.',

            'delivery_date.required'=> 'Fecha del de entrega del mantenimiento es requerido.',

            'current_mileage.required'=> 'El kilometraje actual del veiculo es requerido.',
            'current_mileage.string'=> 'El kilometraje actual del veiculo debe tener solo caracteres.',
            'current_mileage.min'=> 'El kilometraje actual del veiculo tiene un minimo de 3 caracteres.',
            'current_mileage.max'=> 'El kilometraje actual del veiculo tiene un maximo de 55 caracteres.',

            'work_description.required'=> 'La descripcion del trabajo del veiculo es requerido.',
            'work_description.string'=> 'La descripcion del trabajo debe tener solo caracteres.',
            'work_description.max'=> 'La descripcion del trabajo tiene un maximo de 255 caracteres.',

            'current_owner.required'=> 'El tipo de propiedad del veiculo es requerido.',
            'current_owner.string'=> 'El semestre debe tener solo caracteres.',
            'current_owner.min'=> 'El semestre tiene un minimo de 20 caracteres.',
            'current_owner.max'=> 'El semestre tiene un maximo de 45 caracteres.',

            'parts_cost.required'=> 'El costo de las piesas del veiculo es requerido.',
            'parts_cost.string'=> 'El costo de las piesas debe tener solo caracteres.',
            'parts_cost.max'=> 'El costo de las piesas tiene un maximo de 55 caracteres.',

            'labor_cost.required'=> 'El costo laboral para el veiculo es requerido.',
            'labor_cost.string'=> 'El semestre debe tener solo caracteres.',
            'labor_cost.max'=> 'El semestre tiene un maximo de 45 caracteres.',

            'total_cost.required'=> 'El costo total del veiculo es requerido.',
            'total_cost.string'=> 'El costo total debe tener solo caracteres.',
            'total_cost.max'=> 'El costo total tiene un maximo de 45 caracteres.',

            'vehicle_id.required'=> 'El nombre del veiculo es requerido.',

            'client_id.required'=> 'El nombre del cliente es requerido.',

            'technican_id.required'=> 'El nombre del técnico es requerido.',
        ];
    }
}
