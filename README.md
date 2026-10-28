# Findinus — API Pendataan Barang Hilang dan Ditemukan

## Deskripsi

Findinus merupakan proyek pengembangan REST API untuk pendataan barang hilang dan barang ditemukan. Proyek ini dibuat sebagai bagian dari kegiatan pelatihan Backend BTNG 2026 di lingkungan organisasi kampus.

API ini dikembangkan menggunakan Laravel 12 dan MySQL. Fitur yang tersedia meliputi pengambilan data, penambahan data, pembaruan data, dan penghapusan data barang.

## Teknologi yang Digunakan

- Laravel 12
- PHP
- MySQL
- Swagger untuk dokumentasi dan pengujian API
- Clever Cloud untuk deployment

## Link Proyek

- **Repository GitHub:** https://github.com/doubleuff/BTNG-Backend-Winda_Fitria_Khoirunnisa
- **Dokumentasi API:** https://app-e8682051-5d2f-48c8-8b73-6e6f0aeb09ef.cleverapps.io/docs/api
- **Base URL:** https://app-e8682051-5d2f-48c8-8b73-6e6f0aeb09ef.cleverapps.io

## Fitur API

API Findinus memiliki beberapa endpoint untuk mengelola data barang.

| Method | Endpoint | Keterangan |
|---|---|---|
| GET | `/api/items` | Menampilkan seluruh data barang |
| GET | `/api/items/{id}` | Menampilkan detail barang berdasarkan ID |
| POST | `/api/items` | Menambahkan data barang |
| PUT/PATCH | `/api/items/{id}` | Memperbarui data barang |
| DELETE | `/api/items/{id}` | Menghapus data barang |

## Data Barang

Data barang memiliki beberapa atribut, yaitu:

- `nama_item`: nama barang
- `kategori`: kategori barang
- `lokasi`: lokasi kejadian
- `deskripsi`: deskripsi barang
- `jenis`: jenis barang, yaitu hilang atau ditemukan
- `status`: status penanganan barang
- `tanggal_kejadian`: tanggal kejadian
- `kontak`: informasi kontak
- `foto`: informasi foto barang

## Cara Menjalankan Proyek

### 1. Clone Repository

```bash
git clone https://github.com/doubleuff/BTNG-Backend-Winda_Fitria_Khoirunnisa.git
cd BTNG-Backend-Winda_Fitria_Khoirunnisa
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`, kemudian buat application key.

```bash
php artisan key:generate
```

Sesuaikan konfigurasi database pada file `.env` dengan database MySQL yang digunakan.

### 4. Migrasi Database

```bash
php artisan migrate
```

### 5. Menambahkan Data Awal

```bash
php artisan db:seed
```

Perintah tersebut digunakan untuk menjalankan seeder yang telah dikonfigurasi pada proyek.

### 6. Menjalankan Server Lokal

```bash
php artisan serve
```

Setelah server berjalan, API lokal dapat diakses melalui `http://127.0.0.1:8000`.

## Pengujian API

Pengujian API dapat dilakukan melalui dokumentasi Swagger yang tersedia pada link berikut:

https://app-e8682051-5d2f-48c8-8b73-6e6f0aeb09ef.cleverapps.io/docs/api

Pengujian meliputi proses menampilkan data, menambahkan data, memperbarui data, menghapus data, dan memeriksa validasi input.

## Penutup

Proyek Findinus dikembangkan sebagai bagian dari Tugas Akhir Backend BTNG 2026. Melalui proyek ini, penerapan REST API menggunakan Laravel 12 dan MySQL dilakukan untuk mengelola data barang hilang dan ditemukan.

**Pengembang:** Winda Fitria Khoirunnisa
