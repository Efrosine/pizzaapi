<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();

        if ($data->isEmpty()) {
            return response()->json([
                'message' => 'Tidak ada user yang ditemukan',
            ], 404);
        }

        return response()->json([
            'message' => 'Berhasil menampilkan semua user',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        return response()->json([
            'message' => 'User berhasil ditambahkan',
            'data' => $user
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json([
            'message' => 'Berhasil menampilkan user',
            'data' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        return response()->json([
            'message' => 'User berhasil diubah',
            'data' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'User berhasil dihapus',
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            return response()->json([
                'message' => 'Berhasil login',
                'data' => $user,
            ]);
        }

        return response()->json([
            'message' => 'Gagal login',
        ], 401);
    }

    public function register(UserRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);

        return response()->json([
            'message' => 'Berhasil register',
            'data' => $user,
        ], 201);
    }
}
