<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengeluaranTable extends Migration
{
    public function up()
    {
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('description'); // Deskripsi pengeluaran
            $table->integer('amount'); // Jumlah pengeluaran
            $table->date('date'); // Tanggal pengeluaran
            $table->unsignedBigInteger('category_id'); // Foreign Key ke kategori transaksi
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengeluaran');
    }
}
