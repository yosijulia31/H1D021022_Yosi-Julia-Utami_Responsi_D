<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaldoTable extends Migration
{
    public function up()
    {
        Schema::create('saldo', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('jenis_saldo'); // Jenis saldo (misal: tunai, rekening bank, dll.)
            $table->integer('amount'); // Jumlah saldo
            $table->unsignedBigInteger('user_id'); // Foreign Key ke tabel pengguna
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('saldo');
    }
}
