<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Pastikan hanya customer yang bisa membuat pesanan
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'order_date' => 'required|date',
            'status' => 'required|in:pending,prosessed,completed,cancelled',
            'total_price' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'ID pelanggan wajib diisi.',
            'user_id.exists' => 'Pelanggan tidak ditemukan.',
            'order_date.required' => 'Tanggal pesanan wajib diisi.',
            'order_date.date' => 'Tanggal pesanan tidak valid.',
            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status harus salah satu dari: pending, prosessed, completed, cancelled.',
            'total_price.required' => 'Total harga wajib diisi.',
            'total_price.integer' => 'Total harga harus berupa angka.',
            'total_price.min' => 'Total harga minimal 1.',
        ];
    }
}
