<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.string' => 'Nama kategori harus berupa teks.',
            'name.max' => 'Nama kategori tidak boleh lebih dari 255 karakter.',
            'description.required' => 'Deskripsi wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi tidak boleh lebih dari 500 karakter.',
        ];
    }
}
