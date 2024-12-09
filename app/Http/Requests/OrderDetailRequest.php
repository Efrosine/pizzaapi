<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderDetailRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Pastikan hanya admin yang bisa mengubah order detail
    }

    public function rules()
    {
        return [
            'order_id' => 'required|exists:orders,id',
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'order_id.required' => 'ID pesanan wajib diisi.',
            'order_id.exists' => 'Pesanan tidak ditemukan.',
            'menu_id.required' => 'ID menu wajib diisi.',
            'menu_id.exists' => 'Menu tidak ditemukan.',
            'quantity.required' => 'Jumlah wajib diisi.',
            'quantity.integer' => 'Jumlah harus berupa angka.',
            'quantity.min' => 'Jumlah minimal 1.',
            'price.required' => 'Harga wajib diisi.',
            'price.integer' => 'Harga harus berupa angka.',
            'price.min' => 'Harga minimal 1.',
        ];
    }
}
