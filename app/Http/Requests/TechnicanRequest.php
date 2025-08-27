<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TechnicanRequest extends FormRequest
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
            'name'=> 'required|string|min:20|max:255',
            'phone'=> ['nullable', 'string', 'max:9', Rule::unique('technicans')->ignore($this->technican)],
            'mail'=> ['required', 'max:255', Rule::unique('technicans')->ignore($this->technican)],
            'hire_date'=> 'required',
            'status'=> 'required|string|max:12',
            'years_experience'=> 'required|string|max:35',
            'certifications'=> 'required|string|max:55',
            'hourly_rate'=> 'required|string|min:3|max:45',
            'photo_url'=> 'required|string|min:3|max:255',
            'services_count'=> 'required|string|min:3|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=> 'El nombre del técnico es requerido.',
            'name.string'=> 'El nombre debe tener solo caracteres.',
            'name.min'=> 'El nombre debe tener un minimo de 20 caracteres.',
            'name.max'=> 'El nombre debe de tener un maximo de 255 caracteres.',

            'phone.required'=> 'El numero teléfonico del técnico es requerido.',
            'phone.string'=> 'El numero teléfonico debe tener solo valores numericos.',
            'phone.max'=> 'El numero teléfonico tiene un maximo de 9 caracteres.',

            'mail.required'=> 'El correo del técnico es requerido.',
            'mail.max'=> 'El correo tiene un maximo de 255 caracteres.',

            'hire_date.required'=> 'Fecha del contrato del técnico es requerido.',

            'status.required'=> 'El estado del Tecnico es requerido.',
            'status.string'=> 'El estado debe tener solo caracteres.',
            'status.max'=> 'El estado tiene un maximo de 12 caracteres.',

            'years_experience.required'=> 'los años de experiencia del técnico es requerido.',
            'years_experience.string'=> 'los años de experiencia debe tener silo caracteres',
            'years_experience.max'=> 'Los años de experiencia solo tiene un maximo de 35 caracteres.',

            'certifications.required'=> 'El certificado del técnico es requerido.',
            'certifications.string'=> 'El certificado debe contener solo caracteres',
            'certifications.max'=> 'El certificado solo tiene un maximo de 55 caracteres.',

            'hourly_rate.required'=> 'La tarifa por hora del técnico es requerido.',
            'hourly_rate.string'=> 'La tarifa por hora debe contener solo caracteres',
            'hourly_rate.min'=> 'La tarifa por hora solo tiene un minimo de 3 caracteres.',
            'hourly_rate.max'=> 'La tarifa por hora solo tiene un maximo de 45 caracteres.',

            'photo_url.required'=> 'La URL de la foto del técnico es requerido.',
            'photo_url.string'=> 'La URL de la foto debe contener solo caracteres',
            'photo_url.min'=> 'La URL de la foto solo tiene un minimo de 3 caracteres.',
            'photo_url.max'=> 'La URL de la foto solo tiene un maximo de 255 caracteres.',

            'services_count.required'=> 'Los servicios de cuenta del técnico es requerido.',
            'services_count.string'=> 'Los servicios de cuenta debe contener solo caracteres',
            'services_count.min'=> 'Los servicios de cuenta solo tiene un minimo de 3 caracteres.',
            'services_count.max'=> 'Los servicios de cuenta solo tiene un maximo de 10 caracteres.',
        ];
    }
}
