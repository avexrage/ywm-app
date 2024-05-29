<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->date('check_in'); 
            $table->date('check_out'); 
            $table->enum('metode_pembayaran',['Tunai', 'Transfer BRI']);
            $table->enum('status_pendaftaran',['Baru', 'Ditolak', 'Diterima', 'Menunggu Jadwal', 'Dibatalkan'])->default('Baru');
            $table->foreignId('data_peserta_id')->constrained('data_peserta')->onDelete('cascade');
            $table->timestamps(); // Tambahkan kolom timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
};