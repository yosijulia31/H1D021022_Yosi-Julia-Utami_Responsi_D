<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHutangPiutangTable extends Migration
{
    public function up()
    {
        Schema::create('hutang_piutang', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('type'); // Jenis (hutang atau piutang)
            $table->string('description'); // Deskripsi hutang atau piutang
            $table->integer('amount'); // Jumlah hutang/piutang
            $table->date('due_date'); // Tanggal jatuh tempo
            $table->unsignedBigInteger('user_id'); // Foreign Key ke tabel pengguna
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('hutang_piutang');
    }
}
