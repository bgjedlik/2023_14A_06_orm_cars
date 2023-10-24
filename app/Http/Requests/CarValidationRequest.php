<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // validálás engedélyezése
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'founded' => 'required|integer|min:1900|max:2023',
            'description' => 'required'
        ];
    }

    public function messages(){
        return [
            'required' => 'Kötelező kitölteni!',
            'integer' => 'Csak szám lehet! :attribute'
        ];
    }
}
