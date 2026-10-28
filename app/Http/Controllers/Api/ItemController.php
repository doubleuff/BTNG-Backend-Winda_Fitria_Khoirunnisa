<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();

        return response()->json([
            'message' => 'Daftar item berhasil diambil',
            'data' => ItemResource::collection($items),
        ],200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_item' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'lokasi' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'jenis' => ['required', 'in:hilang,ditemukan'],
            'status' => ['sometimes', 'in:belum_selesai,diklaim,selesai'],
            'tanggal_kejadian' => ['required', 'date'],
            'kontak' => ['required', 'string', 'max:100'],
            'foto' => ['nullable', 'url', 'max:500'],
        ]);

        $item = Item::create($validated);

        return response()->json([
            'message' => 'Data item berhasil ditambahkan',
            'data' => new ItemResource($item),
        ], 201);
    }

    public function show(string $id){
        $item = Item::find($id);

        if (!$item) {
            return response()->json(['message' => 'Data item tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Detail item berhasil diambil',
            'data' => new ItemResource($item),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $item = Item::find($id);

        if (!$item) {
            return response()->json(['message' => 'Data item tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama_item' => ['sometimes', 'string', 'max:255'],
            'kategori' => ['sometimes', 'string', 'max:100'],
            'lokasi' => ['sometimes', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'jenis' => ['sometimes', 'in:hilang,ditemukan'],
            'status' => ['sometimes', 'in:belum_selesai,diklaim,selesai'],
            'tanggal_kejadian' => ['sometimes', 'date'],
            'kontak' => ['sometimes', 'string', 'max:100'],
            'foto' => ['nullable', 'url', 'max:500'],
        ]);

        $item->update($validated);

        return response()->json([
            'message' => 'Data item berhasil diperbarui',
            'data' => new ItemResource($item),
        ],200);
    }

    public function destroy(string $id){
        $item = Item::find($id);

        if (!$item) {
            return response()->json(['message' => 'Data item tidak ditemukan'], 404);
        }

        $item->delete();

        return response()->json([
            'message' => 'Data item berhasil dihapus',
            'data' => null,
        ]);
    }
}