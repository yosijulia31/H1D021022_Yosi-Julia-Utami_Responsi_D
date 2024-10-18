<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanBulananTable extends Migration
{
    public function up()
    {
        Schema::create('laporan_bulanan', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->integer('total_income'); // Total pemasukan bulan ini
            $table->integer('total_expenses'); // Total pengeluaran bulan ini
            $table->integer('ending_balance'); // Saldo akhir bulan ini
            $table->date('month'); // Bulan yang dilaporkan
            $table->unsignedBigInteger('user_id'); // Foreign Key ke tabel pengguna
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporan_bulanan');
    }
}
