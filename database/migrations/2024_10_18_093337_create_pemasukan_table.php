<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasukanTable extends Migration
{
    public function up()
    {
        Schema::create('pemasukan', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('description'); // Deskripsi pemasukan
            $table->integer('amount'); // Jumlah pemasukan
            $table->date('date'); // Tanggal pemasukan
            $table->unsignedBigInteger('category_id'); // Foreign Key ke kategori transaksi
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemasukan');
    }
}
