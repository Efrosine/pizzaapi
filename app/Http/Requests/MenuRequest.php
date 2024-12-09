<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Memastikan hanya admin yang dapat membuat atau mengubah menu
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string|max:500',
            'image_url' => 'required|string|',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama menu wajib diisi.',
            'name.string' => 'Nama menu harus berupa teks.',
            'name.max' => 'Nama menu tidak boleh lebih dari 255 karakter.',
            'price.required' => 'Harga wajib diisi.',
            'price.integer' => 'Harga harus berupa angka.',
            'price.min' => 'Harga minimal 1.',
            'category.required' => 'Kategori wajib diisi.',
            'category.in' => 'Kategori harus pizza, drink, atau other.',
            'description.required' => 'Deskripsi wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',
            'description.max' => 'Deskripsi tidak boleh lebih dari 500 karakter.',
            'image_url.required' => 'URL gambar wajib diisi.',
            'image_url.string' => 'URL gambar harus berupa teks.',
        ];
    }
}
