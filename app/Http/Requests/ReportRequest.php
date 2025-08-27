<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReportRequest extends FormRequest
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
            'filter_type'=> 'required|string|min:20|max:55',
            'generated_date'=> 'required',
            'content_summary'=> 'required|string|max:255',
            'generated_by'=> 'required|string|max:55',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'output_format'=> 'required|string|max:55',
            'report_title'=> 'required|string|min:3|max:45',
            'archived'=> 'required|string|min:3|max:55',
            'total_records'=> 'required|string|min:3|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'filter_type.required'=> 'El tipo de filtro del reporte es requerido.',
            'filter_type.string'=> 'El tipo de filtro debe tener solo caracteres.',
            'filter_type.min'=> 'El tipo de filtro debe tener un minimo de 20 caracteres.',
            'filter_type.max'=> 'El tipo de filtro debe de tener un maximo de 55 caracteres.',

            'generated_date.required'=> 'La fecha de generacion del reporte es requerido.',

            'content_summary.required'=> 'El resumen del contenido del reporte es requerido.',
            'content_summary.string'=> 'El resumen del contenido debe contener solo caracteres',
            'content_summary.max'=> 'El resumen del contenido solo tiene un maximo de 255 caracteres.',

            'generated_by.required'=> 'El generado del reporte es requerido.',
            'generated_by.string'=> 'El generado debe contener solo caracteres',
            'generated_by.max'=> 'El generado solo tiene un maximo de 55 caracteres.',

            'start_date.required'=> 'La fecha de comienzo del reporte es requerido.',

            'end_date.required'=> 'La fecha de finalizacion del reporte es requerido.',

            'output_format.required'=> 'El formato de salida del reporte es requerido.',
            'output_format.string'=> 'El formato de salida debe contener solo caracteres',
            'output_format.max'=> 'El formato de salida solo tiene un maximo de 55 caracteres.',

            'report_title.required'=> 'El titulo del reporte es requerido.',
            'report_title.string'=> 'El titulo debe tener silo caracteres',
            'report_title.min'=> 'El titulo solo tiene un minimo de 3 caracteres.',
            'report_title.max'=> 'El titulo solo tiene un maximo de 45 caracteres.',

            'archived.required'=> 'El archivo del reporte es requerido.',
            'archived.string'=> 'El archivo debe tener silo caracteres',
            'archived.min'=> 'El archivo solo tiene un minimo de 3 caracteres.',
            'archived.max'=> 'El archivo solo tiene un maximo de 55 caracteres.',

            'total_records.required'=> 'Los registros totales del reporte es requerido.',
            'total_records.string'=> 'Los registros totales debe contener solo caracteres',
            'total_records.min'=> 'Los registros totales solo tiene un minimo de 3 caracteres.',
            'total_records.max'=> 'Los registros totales solo tiene un maximo de 255 caracteres.',
        ];
    }
}
