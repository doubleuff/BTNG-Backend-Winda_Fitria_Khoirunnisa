<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nama_item', 'kategori', 'lokasi', 'deskripsi', 'jenis',
        'status', 'tanggal_kejadian', 'kontak', 'foto',
    ];

    protected $casts = [
        'tanggal_kejadian' => 'date',
    ];
}