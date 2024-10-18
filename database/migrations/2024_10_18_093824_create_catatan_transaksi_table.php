<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('catatan_transaksi', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('description'); // Deskripsi transaksi
            $table->integer('amount'); // Jumlah transaksi
            $table->string('type'); // Jenis transaksi (pemasukan/pengeluaran)
            $table->date('date'); // Tanggal transaksi
            $table->unsignedBigInteger('category_id'); // Foreign Key ke kategori transaksi
            $table->unsignedBigInteger('user_id'); // Foreign Key ke tabel pengguna
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('catatan_transaksi');
    }
}
