<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCvRequest extends FormRequest
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
            'title' => ['sometimes', 'string', 'max:40'],
            'full_name' => ['sometimes', 'string', 'max:255'],
            'email' => ['sometimes', 'email', 'max:255'],
            'phone_number' => ['sometimes', 'string', 'max:30'],
            'address' => ['sometimes', 'string', 'max:255'],
            'about' => ['sometimes', 'string', 'max:2000'],
        ];
    }
}
