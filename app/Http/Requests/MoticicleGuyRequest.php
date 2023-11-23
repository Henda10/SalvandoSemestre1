<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoticicleGuyRequest extends FormRequest
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
            'Primernombre'=>['required','min:1','max:10'],
            'Segundonombre'=>['required','min:1','max:10'],
            'PrimerApellido'=>['required','min:1','max:15'],
            'SegundoApellido'=>['required','min:1','max:15'],
            'Celular'=>['required','min:1','max:8'],
            'Matricula'=>['required','min:0']
        ];
    }
}
