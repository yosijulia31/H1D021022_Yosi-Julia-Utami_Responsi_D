<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestasiTable extends Migration
{
    public function up()
    {
        Schema::create('investasi', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('investment_type'); // Jenis investasi (misal: saham, emas, properti, dll.)
            $table->integer('amount'); // Nilai investasi
            $table->date('investment_date'); // Tanggal investasi
            $table->unsignedBigInteger('user_id'); // Foreign Key ke tabel pengguna
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('investasi');
    }
}
