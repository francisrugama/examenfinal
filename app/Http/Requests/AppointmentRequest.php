<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AppointmentRequest extends FormRequest
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
            'code_appointments'=> ['required','string','min:8', 'max:20', Rule::unique('appointments')->ignore($this->appointment)],
            'creation_date'=> 'required',
            'notes'=> 'required|text',
            'confirmed'=> 'required|string|min:8|max:45',
            'technican_id'=> 'required',
            'client_id'=> 'required',
            'vehicle_id'=> 'required',
        ];
    }
    public function massages(): array
    {
        return [
            'code_appointments.required'=> 'El código de cita es requerido.',
            'code_appointments.unique'=> 'El código de cita es unico.',
            'code_appointments.string'=> 'El código de cita debe contener solo caracteres.',
            'code_appointments.min'=> 'El código de cita debe tener un minimo de 8 caracteres.',
            'code_appointments.max'=> 'El código de cita debe de tener un maximo de 20 caracteres.',

            'creation_date.required'=> 'Fecha de la creacion es requerido.',

            'notes.required'=> 'Las notas son requerido.',
            'notes.text'=> 'Las notas debe tener solo caracteres.',

            'confirmed.required'=> 'La confirmacion de la cita es requerido.',
            'confirmed.string'=> 'La confirmacion de la cita debe tener solo caracteres.',
            'confirmed.min'=> 'La confirmacion de la cita tiene un minimo de 8 caracteres.',
            'confirmed.max'=> 'La confirmacion de la cita tiene un maximo de 45 caracteres.',

            'technican_id.required'=> 'El nombre del técnico es requerido.',

            'client_id.required'=> 'El nombre del cliente es requerido.',

            'vehicle_id.required'=> 'El nombre de veiculo es requerido.',
        ];
    }
}
