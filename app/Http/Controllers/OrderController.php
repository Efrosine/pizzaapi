<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Order::all();
        if ($data->isEmpty()) {
            return response()->json([
                'message' => 'Tidak ada order yang ditemukan',
            ], 404);
        }
        return response()->json([
            'message' => 'Berhasil menampilkan semua order',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $validated = $request->validated();
        $order = Order::create($validated);
        return response()->json([
            'message' => 'Order berhasil ditambahkan',
            'data' => $order
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return response()->json([
            'message' => 'Berhasil menampilkan order',
            'data' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->validated());
        return response()->json([
            'message' => 'Order berhasil diubah',
            'data' => $order
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json([
            'message' => 'Order berhasil dihapus'
        ]);
    }
}
