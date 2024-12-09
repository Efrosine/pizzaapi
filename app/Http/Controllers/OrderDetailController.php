<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderDetailRequest;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = OrderDetail::all();
        if ($data->isEmpty()) {
            return response()->json([
                'message' => 'Tidak ada order detail yang ditemukan',
            ], 404);
        }
        return response()->json([
            'message' => 'Berhasil menampilkan semua order detail',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderDetailRequest $request)
    {
        $validated = $request->validated();
        $orderDetail = OrderDetail::create($validated);
        return response()->json([
            'message' => 'Order detail berhasil ditambahkan',
            'data' => $orderDetail
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDetail $orderDetail)
    {
        return response()->json([
            'message' => 'Berhasil menampilkan order detail',
            'data' => $orderDetail
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderDetailRequest $request, OrderDetail $orderDetail)
    {
        $orderDetail->update($request->validated());
        return response()->json([
            'message' => 'Order detail berhasil diubah',
            'data' => $orderDetail
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail->delete();
        return response()->json([
            'message' => 'Order detail berhasil dihapus'
        ]);
    }
}
