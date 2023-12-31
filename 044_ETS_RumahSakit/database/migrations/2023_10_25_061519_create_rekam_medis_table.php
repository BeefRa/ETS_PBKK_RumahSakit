<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id('Nomor_rekam');
            $table->unsignedBigInteger('NIK');
            $table->string('Nama_Pasien');
            $table->text('Kondisi');
            $table->double('Suhu');
            $table->unsignedBigInteger('Dokter');

            $table->foreign('NIK')->reference('id')->on('pasien');
            $table->foreign('Dokter')->reference('id')->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
