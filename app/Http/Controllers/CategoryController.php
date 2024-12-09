<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        if ($categories->isEmpty()) {
            return response()->json([
                'message' => 'Data kategori tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'message' => 'Data kategori berhasil diambil',
            'data' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();
        $category = Category::create($validated);
        return response()->json([
            'message' => 'Kategori berhasil ditambahkan',
            'data' => $category
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json([
            'message' => 'Data kategori berhasil diambil',
            'data' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json([
            'message' => 'Data kategori berhasil diubah',
            'data' => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'message' => 'Data kategori berhasil dihapus'
        ]);
    }
}
