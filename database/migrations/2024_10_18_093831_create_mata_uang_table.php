<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataUangTable extends Migration
{
    public function up()
    {
        Schema::create('mata_uang', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('currency_code'); // Kode mata uang (misalnya: USD, IDR)
            $table->string('currency_name'); // Nama mata uang (misalnya: Dollar, Rupiah)
            $table->decimal('exchange_rate', 10, 2); // Nilai tukar terhadap mata uang utama
            $table->unsignedBigInteger('user_id'); // Foreign Key ke tabel pengguna
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('mata_uang');
    }
}
