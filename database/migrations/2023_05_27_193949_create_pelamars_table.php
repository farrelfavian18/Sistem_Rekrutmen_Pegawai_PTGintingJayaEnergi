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
        Schema::create('pelamars', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('id_jabatan');
            $table->foreignId('id_jabatan')->references('id')->on('jabatans')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreignId('id_jabatan')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_lengkap');
            // $table->unsignedBigInteger('id_jabatan');
            //$table->foreignId('id_jabatan')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            // ->references('id')->on('jabatans')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('jabatan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->enum('jenis_kelamin',['Pria' , 'Wanita']);
            $table->string('alamat_rumah');
            $table->enum('pendidikan_terakhir',['SMA','SMK','STM','S1','S2','S3','D3','D4']);
            $table->enum('status',['menikah','belum_menikah','cerai']);
            $table->enum('agama',['Islam','Kristen','Katholik','Hindu','Buddha','KongHuCu']);
            $table->bigInteger('nomor_ktp')->unique();
            $table->char('scan_ktp')->nullable();
            $table->string('email');
            $table->bigInteger('no_telp');
            $table->bigInteger('no_kk')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nama_sertifikat_migas')->nullable();
            $table->char('sertifikat_migas')->nullable();
            $table->date('masa_berlaku_sertifikat')->nullable();
            $table->enum('sim',['sim_a','sim_b1','sim_b2','sim_c','belum_punya'])->nullable();
            $table->string('pengalaman_kerja')->nullable();
            $table->string('pengalaman_jabatan')->nullable();
            $table->string('masa_jabatan')->nullable();
            $table->string('pengalaman_kerja2')->nullable();
            $table->string('pengalaman_jabatan2')->nullable();
            $table->string('masa_jabatan2')->nullable();
            $table->string('pengalaman_kerja3')->nullable();
            $table->string('pengalaman_jabatan3')->nullable();
            $table->string('masa_jabatan3')->nullable();
            $table->char('cv')->nullable();
            // $table->enum('keterangan',['Lulus','Tidak Lulus'])->nullable();
            // $table->date('jadwal_interview')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamars');
    }
};
