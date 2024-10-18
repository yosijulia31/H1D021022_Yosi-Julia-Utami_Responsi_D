<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggaranTable extends Migration
{
    public function up()
    {
        Schema::create('anggaran', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('budget_name'); // Nama anggaran
            $table->integer('amount'); // Jumlah anggaran
            $table->unsignedBigInteger('category_id'); // Foreign Key ke kategori transaksi
            $table->unsignedBigInteger('user_id'); // Foreign Key ke tabel pengguna
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('anggaran');
    }
}
