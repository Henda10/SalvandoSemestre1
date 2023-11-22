<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesRequest extends FormRequest
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
            //
            'Primernombre'=>['required','min:5','max:10'],
            'Segundonombre'=>['required','min:5','max:10'],
            'PrimerApellido'=>['required','min:3','max:15'],
            'SegundoApellido'=>['required','min:3','max:15'],
            'Cedula'=>['required','min:5','max:60'],
            'Numero'=>['required','min:1','max:8'],
        ];
    }
}
