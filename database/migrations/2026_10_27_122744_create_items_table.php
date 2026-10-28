<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nama_item');
            $table->string('kategori');
            $table->string('lokasi');
            $table->text('deskripsi')->nullable();
            $table->string('jenis');                            
            $table->string('status')->default('belum_selesai'); 
            $table->date('tanggal_kejadian');
            $table->string('kontak');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
