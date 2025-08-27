<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Service_historyRequest extends FormRequest
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
            'service_date'=> 'required|string|min:3|max:55',
            'mileage_service'=> 'required|string|min:3|max:255',
            'total_cost'=> 'required|string|max:55',
            'vehicle_id'=> 'required',
            'maintenance_record_id'=> 'required',
            'report_id'=> 'requiered',
        ];
    }
    public function massages(): array
    {
        return [

            'services_date.required'=> 'Fecha del servicio es requerido.',

            'mileage_service.required'=> 'El sercicio de kilometraje del veiculo es requerido.',
            'mileage_service.string'=> 'El sercicio de kilometraje del veiculo debe tener solo caracteres.',
            'mileage_service.min'=> 'El sercicio de kilometraje del veiculo tiene un minimo de 3 caracteres.',
            'mileage_service.max'=> 'El sercicio de kilometraje del veiculo tiene un maximo de 255 caracteres.',

            'total_cost.required'=> 'El costo total del veiculo es requerido.',
            'total_cost.string'=> 'El costo total debe tener solo caracteres.',
            'total_cost.max'=> 'El costo total tiene un maximo de 45 caracteres.',

            'vehicle_id.required'=> 'El nombre del veiculo es requerido.',

            'maintenance_record_id.required'=> 'la fecha de entrada del registro de mantenimiento es requerido.',

            'report_id.required'=> 'El titulo de reporte es requerido.',
        ];
    }
}
