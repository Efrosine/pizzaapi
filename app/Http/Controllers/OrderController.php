<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Menu;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    /**
     * Method untuk membuat order beserta order detail dalam satu request.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function createOrder(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id', // Validasi user_id
            'items' => 'required|array', // Validasi items harus array
            'items.*.menu_id' => 'required|exists:menus,id', // Validasi menu_id
            'items.*.quantity' => 'required|integer|min:1', // Validasi quantity
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Mulai transaksi untuk memastikan order dan orderdetail dibuat bersama-sama
        DB::beginTransaction();
        try {
            // Membuat order baru
            $order = Order::create([
                'user_id' => $request->user_id,
                'total_price' => 0, // Harga total akan dihitung setelah detail order
            ]);

            // Inisialisasi total harga
            $totalPrice = 0;

            // Menambahkan detail order
            foreach ($request->items as $item) {
                // Ambil data menu berdasarkan menu_id
                $menu = Menu::find($item['menu_id']);

                // Hitung harga total berdasarkan quantity
                $totalPrice += $menu->price * $item['quantity'];

                // Menambahkan detail order
                OrderDetail::create([
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'quantity' => $item['quantity'],
                    'price' => $menu->price,
                ]);
            }

            // Update total price untuk order
            $order->update(['total_price' => $totalPrice]);

            // Commit transaksi
            DB::commit();

            // Response sukses
            return response()->json([
                'message' => 'Order berhasil dibuat!',
                'order' => $order,
                'order_details' => $order->orderDetails, // Mengirim detail order
            ], 201);

        } catch (\Exception $e) {
            // Rollback jika terjadi error
            DB::rollBack();
            return response()->json(['error' => 'Gagal membuat order.'], 500);
        }
    }

    public function getOrdersByUserId($id)
    {
        // Mengambil pesanan berdasarkan user_id
        $orders = Order::where('user_id', $id)->get();

        if ($orders->isEmpty()) {
            return response()->json(['message' => 'No orders found for this user.'], 404);
        }

        // Jika pesanan ditemukan, ambil detail pesanan
        foreach ($orders as $order) {
            $order->items = OrderDetail::where('order_id', $order->id)
                ->with('menu') // Menyertakan data menu (assumes OrderDetail memiliki relasi ke Menu)
                ->get();
        }

        // Mengembalikan respons dengan data pesanan
        return response()->json(['data' => $orders], 200);
    }
}
