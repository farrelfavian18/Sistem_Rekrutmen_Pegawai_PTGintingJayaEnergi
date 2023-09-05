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
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_pelamar')->references('id')->on('pelamars')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('id_jabatan')->references('id_jabatan')->on('pelamars')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_pelamar')->references('id')->on('pelamars')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('id_jabatan')->references('id_jabatan')->on('pelamars')->onDelete('no action')->onUpdate('no action');
            $table->string('nama_lengkap');
            $table->dateTime('jadwal_interview')->nullable();
            $table->enum('seleksi_dokumen',['Sedang Proses','Lulus','Tidak Lulus'])->nullable()->default('Sedang Proses');
            $table->enum('seleksi_rekrutmen',['Sedang Proses','Lulus','Tidak Lulus'])->nullable()->default('Sedang Proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
