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
        Schema::create('kategori_transaksi', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('transaction'); // Kolom untuk jenis transaksi
            $table->string('type'); // Tipe transaksi
            $table->integer('amount'); // Jumlah transaksi
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_transaksis');
    }
};
