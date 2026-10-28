<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'nama_item' => 'Charger laptop ASUS hitam 65W',
                'kategori' => 'Elektronik',
                'lokasi' => 'Gedung D UDINUS, lantai 3, ruang kelas D.3.1.',
                'deskripsi' => 'Adaptor charger berwarna hitam dengan kabel sekitar satu meter. Terakhir digunakan saat perkuliahan dan diduga tertinggal setelah kelas selesai.',
                'jenis' => 'hilang',
                'status' => 'belum_selesai',
                'tanggal_kejadian' => '2026-10-27',
                'kontak' => 'bjorn',
                'foto' => null,
            ],
            [
                'nama_item' => 'Kartu mahasiswa dalam holder bening',
                'kategori' => 'Dokumen',
                'lokasi' => 'Gedung E UDINUS, lantai 2, perpustakaan.',
                'deskripsi' => 'Satu kartu mahasiswa di dalam holder plastik bening dengan gantungan kecil berwarna biru. Diduga tertinggal setelah belajar mandiri.',
                'jenis' => 'hilang',
                'status' => 'belum_selesai',
                'tanggal_kejadian' => '2026-10-26',
                'kontak' => 'erna',
                'foto' => null,
            ],
            [
                'nama_item' => 'Earbuds putih dengan casing oval',
                'kategori' => 'Elektronik',
                'lokasi' => 'Gedung H UDINUS, lantai 4, laboratorium komputer, meja workstation nomor 8 dekat pintu masuk',
                'deskripsi' => 'Satu casing earbuds berwarna putih ditemukan di samping keyboard setelah sesi praktikum berakhir. Pemilik dapat mengonfirmasi ciri perangkatnya.',
                'jenis' => 'ditemukan',
                'status' => 'belum_selesai',
                'tanggal_kejadian' => '2026-10-25',
                'kontak' => 'edith',
                'foto' => null,
            ],
            [
                'nama_item' => 'Flashdisk hitam silver 32 GB',
                'kategori' => 'Elektronik',
                'lokasi' => 'Gedung B UDINUS, lantai 2, ruang kelas B.2.4, di sela meja dosen dan papan tulis',
                'deskripsi' => 'Flashdisk berukuran kecil dengan badan hitam dan penutup silver. Ditemukan setelah ruangan digunakan untuk perkuliahan.',
                'jenis' => 'ditemukan',
                'status' => 'belum_selesai',
                'tanggal_kejadian' => '2026-10-23',
                'kontak' => 'kael',
                'foto' => null,
            ],
            [
                'nama_item' => 'Tumbler stainless hijau tua',
                'kategori' => 'Barang pribadi',
                'lokasi' => 'Gedung G UDINUS, lantai 1, area diskusi mahasiswa, meja bundar di dekat tangga',
                'deskripsi' => 'Botol minum stainless berwarna hijau tua dengan tutup hitam dan stiker kecil berbentuk gunung. Terakhir diletakkan di meja saat mengerjakan tugas kelompok.',
                'jenis' => 'hilang',
                'status' => 'belum_selesai',
                'tanggal_kejadian' => '2026-10-24',
                'kontak' => 'eiser',
                'foto' => null,
            ],
        ];

        foreach ($items as $item) {
            Item::updateOrCreate(
                ['nama_item' => $item['nama_item']],
                $item
            );
        }
    }
}
