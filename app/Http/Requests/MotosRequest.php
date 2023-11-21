<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotosRequest extends FormRequest
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
            'Marca'=>['required','min:3','max:10'],
            'Modelo'=>['required','min:5','max:50'],
            'NumeroChasis'=>['required','min:3','max:20'],
            'Matricula'=>['required','min:3','max:20'],
        ];
    }
}
