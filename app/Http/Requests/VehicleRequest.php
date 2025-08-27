<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VehicleRequest extends FormRequest
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
            'owner_name'=> 'required|string|min:5|max:255',
            'owner_phone'=> ['nullable', 'string', 'max:9', Rule::unique('vehicles')->ignore($this->vehicle)],
            'owner_address'=> 'required|string|min:8|max:255',
            'owner_mail'=> ['required', 'max:255', Rule::unique('vehicles')->ignore($this->vehicle)],
            'model'=> 'required|string|min:3|max:55',
            'brand'=> 'required|string|min:3|max:55',
            'license_plate'=> ['nullable', 'string', 'min:16', 'max:20' , Rule::unique('vehicles')->ignore($this->vehicle)],
        ];
    }

    public function messages(): array
    {
        return [
            'owner_name.required'=> 'El nombre del dueño es requerido.',
            'owner_name.string'=> 'El nombre debe tener solo caracteres.',
            'owner_name.min'=> 'El nombre debe tener un minimo de 5 caracteres.',
            'owner_name.max'=> 'El nombre debe de tener un maximo de 255 caracteres.',

            'owner_phone.required'=> 'El numero teléfonico del dueño es requerido.',
            'owner_phone.string'=> 'El numero teléfonico debe tener solo valores numericos.',
            'owner_phone.max'=> 'El numero teléfonico tiene un maximo de 9 caracteres.',

            'owner_address.required'=> 'La dirección del dueño es requerido.',
            'owner_address.string'=> 'La dirección debe tener solo caracteres.',
            'owner_address.min'=> 'La dirección solo tiene un minimo de 8 caracteres.',
            'owner_address.max'=> 'La dirección solo tiene un maximo de 255 caracteres.',

            'owner_mail.required'=> 'El correo del dueño es requerido.',
            'owner_mail.max'=> 'El correo tiene un maximo de 255 caracteres.',

            'model.required'=> 'La modelo del veiculo es requerido.',
            'model.string'=> 'La modelo debe tener silo caracteres',
            'model.min'=> 'La modelo solo tiene un minimo de 3 caracteres.',
            'model.max'=> 'La modelo solo tiene un maximo de 55 caracteres.',

            'brand.required'=> 'La marca del veiculo es requerido.',
            'brand.string'=> 'La marca debe contener solo caracteres',
            'brand.min'=> 'La marca solo tiene un minimo de 3 caracteres.',
            'brand.max'=> 'La marca solo tiene un maximo de 55 caracteres.',

            'license_plate.unique'=> 'La Licencia para el veiculo es unico.',
            'license_plate.string'=> 'La licensia solo se permite caracteres.',
            'license_plate.min'=> 'La licensia tiene un minimo de 16 caracteres.',
            'license_plate.max'=>'La licensia tiene un maximo de 20 caracteres.',
        ];
    }
}
