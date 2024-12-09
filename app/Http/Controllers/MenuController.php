<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::with('category')->get();

        if ($data->isEmpty()) {
            return response()->json([
                'message' => 'Tidak ada menu yang ditemukan',
            ], 404);
        }

        return response()->json([
            'message' => 'Berhasil menampilkan semua menu',
            'data' => $data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $validated['image_url'] = $image->store('bookImg', 'public');
            unset($validated['image']);
        }

        $book = Menu::create($validated);

        return response()->json([
            'message' => 'Menu berhasil ditambahkan',
            'data' => $book
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        $menu->load('category');
        return response()->json([
            'message' => 'Berhasil menampilkan menu',
            'data' => $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        $menu->update($request->validated());
        return response()->json([
            'message' => 'Menu berhasil diubah',
            'data' => $menu
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return response()->json([
            'message' => 'Menu berhasil dihapus'
        ]);
    }
}
