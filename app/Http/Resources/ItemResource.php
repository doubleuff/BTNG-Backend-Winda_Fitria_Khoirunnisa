<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_item' => $this->nama_item,
            'kategori' => $this->kategori,
            'lokasi' => $this->lokasi,
            'deskripsi' => $this->deskripsi,
            'jenis' => $this->jenis,
            'status' => $this->status,
            'tanggal_kejadian' => $this->tanggal_kejadian?->format('Y-m-d'),
            'kontak' => $this->kontak,
            'foto' => $this->foto,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}