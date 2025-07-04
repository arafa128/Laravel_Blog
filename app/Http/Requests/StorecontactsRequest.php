<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecontactsRequest extends FormRequest
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
            'first_name' => 'required|string|min:5',
            'last_name' => 'required|string|min:5',
            'email' => 'email',
            'message' => 'nullable',
        ];
    }

    //if want to change the error message
    // public function messages(): array
    // {
    //     return [
    //         'first_name.required' => 'bla bla bla '
    //     ];
    // }
}
