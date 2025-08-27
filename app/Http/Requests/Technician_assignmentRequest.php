<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Technician_assignmentRequest extends FormRequest
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
            'assignment_date'=> 'required',
            'task_status'=> 'required|string|min:3|max:55',
            'performance_rating'=> 'required|string|min:3|max:55',
            'tools_used'=> 'required|string|max:55',
            'task_type'=> 'required|string|max:100',
            'technican_id'=> 'required',
            'maintenance_record_id'=> 'required',
        ];
    }
    public function massages(): array
    {
        return [
            'assignment_date.required'=> 'La fecha de asignación del technician es requerido.',

            'task_status.required'=> 'El estado de la tarea en el veiculo es requerido.',
            'task_status.string'=> 'El estado de la tarea en el veiculo debe tener solo caracteres.',
            'task_status.min'=> 'El estado de la tarea en el veiculo tiene un minimo de 3 caracteres.',
            'task_status.max'=> 'El estado de la tarea en el veiculo tiene un maximo de 55 caracteres.',

            'performance_rating.required'=> 'La calificacion de rendimiento del veiculo es requerido.',
            'performance_rating.string'=> 'La calificacion de rendimiento del veiculo debe tener solo caracteres.',
            'performance_rating.min'=> 'La calificacion de rendimiento del veiculo tiene un minimo de 3 caracteres.',
            'performance_rating.max'=> 'La calificacion de rendimiento del veiculo tiene un maximo de 55 caracteres.',

            'tool_used.required'=> 'Las herramientas usades en el veiculo es requerido.',
            'tool_used.string'=> 'Las herramientas usades en el veiculo debe tener solo caracteres.',
            'tool_used.min'=> 'Las herramientas usades veiculo tiene un minimo de 3 caracteres.',
            'tool_used.max'=> 'Las herramientas usades veiculo tiene un maximo de 55 caracteres.',

            'task_type.required'=> 'El tipo de tarea del trabajo en el veiculo es requerido.',
            'task_type.string'=> 'El tipo de tarea del trabajo debe tener solo caracteres.',
            'task_type.max'=> 'El tipo de tarea del trabajo tiene un maximo de 100 caracteres.',

            'technican_id.required'=> 'El nombre del técnico es requerido.',

            'maintenance_record_id.required'=> 'la fecha de entrada del registro de mantenimiento es requerido.',
        ];
    }
}
