<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OwnerRequest extends FormRequest
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
            'age'=> 'required|int',
            'birth_date'=> 'required',
            'mail'=> ['required', 'max:255', Rule::unique('owners')->ignore($this->owner)],
            'sex'=> 'required',
            'phone_number'=> ['nullable', 'string', 'max:9', Rule::unique('owners')->ignore($this->owner)],
            'card'=> ['nullable', 'string', 'min:16', 'max:20' , Rule::unique('owners')->ignore($this->owner)],
            'ethnicity'=> 'required|string|min:3|max:45',
            'nationality'=> 'required|string|min:3|max:255',
            'code'=> ['required','string','min:8', 'max:20', Rule::unique('owners')->ignore($this->owner)],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=> 'El nombre del dueño es requerido.',
            'name.string'=> 'El nombre debe tener solo caracteres.',
            'name.min'=> 'El nombre debe tener un minimo de 20 caracteres.',
            'name.max'=> 'El nombre debe de tener un maximo de 255 caracteres.',

            'age.required'=> 'La edad del dueño es requerido.',
            'age.int'=> 'La edad solo se permite valores numericos.',

            'birth_date.required'=> 'La fecha de nacimiento del dueño es requerido.',

            'mail.required'=> 'El correo del dueño es requerido.',
            'mail.max'=> 'El correo tiene un maximo de 255 caracteres.',

            'sex.required'=> 'El sexo del dueño es requerido.',

            'phone_number.required'=> 'El numero teléfonico del dueño es requerido.',
            'phone_number.string'=> 'El numero teléfonico debe tener solo valores numericos.',
            'phone_number.max'=> 'El numero teléfonico tiene un maximo de 9 caracteres.',

            'card.unique'=> 'La identificación del dueño es unico.',
            'card.string'=> 'La identificación solo se permite caracteres.',
            'card.min'=> 'La identificación tiene un minimo de 16 caracteres.',
            'card.max'=>'La identificación tiene un maximo de 20 caracteres.',

            'ethnicity.required'=> 'La etnia del dueño es requerido.',
            'ethnicity.string'=> 'La etnia debe tener silo caracteres',
            'ethnicity.min'=> 'La etnia solo tiene un minimo de 3 caracteres.',
            'ethnicity.max'=> 'La etnia solo tiene un maximo de 45 caracteres.',

            'nationality.required'=> 'La nacionalidad del dueño es requerido.',
            'nationality.string'=> 'La nacionalidad debe contener solo caracteres',
            'nationality.min'=> 'La nacionalidad solo tiene un minimo de 3 caracteres.',
            'nationality.max'=> 'La nacionalidad solo tiene un maximo de 255 caracteres.',

            'code.required'=> 'El código del dueño es requerido.',
            'code.unique'=> 'El codigo del dueño es unico.',
            'code.string'=> 'El código debe contener solo caracteres.',
            'code.min'=> 'El código debe tener un minimo de 8 caracteres.',
            'code.max'=> 'El código debe de tener un maximo de 20 caracteres.',
        ];
    }
}
