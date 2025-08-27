<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Vehicle_historyRequest extends FormRequest
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
            'ownership_type'=> 'required|string|min:3|max:55',
            'document_reference'=> 'required|string|min:8|max:45',
            'current_owner'=> 'required|string|min:20|max:45',
            'code'=> ['required','string','min:8', 'max:20', Rule::unique('vehicles_historys')->ignore($this->vehicle_history)],
            'owner_id'=> 'required',
            'vehicle_id'=> 'required',
            'client_id'=> 'required',
        ];
    }
    public function massages(): array
    {
        return [
            'ownership_type.required'=> 'El tipo de propiedad del veiculo es requerido.',
            'ownership_type.string'=> 'El tipo de propiedad del veiculo debe tener solo caracteres.',
            'ownership_type.min'=> 'El tipo de propiedad del veiculo tiene un minimo de 3 caracteres.',
            'ownership_type.max'=> 'El tipo de propiedad del veiculo tiene un maximo de 55 caracteres.',

            'document_reference.required'=> 'El documento de referencia veiculo es requerido.',
            'document_reference.string'=> 'El documento de referencia debe tener solo caracteres.',
            'document_reference.min'=> 'El documento de referencia tiene un minimo de 8 caracteres.',
            'document_reference.max'=> 'El documento de referencia tiene un maximo de 45 caracteres.',

            'current_owner.required'=> 'El tipo de propiedad del veiculo es requerido.',
            'current_owner.string'=> 'El semestre debe tener solo caracteres.',
            'current_owner.min'=> 'El semestre tiene un minimo de 20 caracteres.',
            'current_owner.max'=> 'El semestre tiene un maximo de 45 caracteres.',

            'code.required'=> 'El código del veiculo es requerido.',
            'code.unique'=> 'El codigo del veiculo es unico.',
            'code.string'=> 'El código debe contener solo caracteres.',
            'code.min'=> 'El código debe tener un minimo de 8 caracteres.',
            'code.max'=> 'El código debe de tener un maximo de 20 caracteres.',

            'owner_id.required'=> 'El nombre del dueño es requerido.',

            'vehicle_id.required'=> 'El nombre de veiculo es requerido.',

            'client_id.required'=> 'El nombre del cliente es requerido.',
        ];
    }
}
