<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelamars')->insert([
           'nama_lengkap' => 'Farrel Favian',
           'kode_jabatan'=> '001',
           'jabatan'=> 'Rig Superintendent',
           'tempat_lahir'=> 'Palembang',
           'tanggal_lahir'=> '2002-05-18',
           'umur'=> '21',
           'agama'=>'Islam',
           'jenis_kelamin'=> 'Pria',
           'alamat_rumah'=> 'Jalan Sersan Wahab no,2048',
           'pendidikan_terakhir'=> 'SMA',
           'status'=> 'menikah',
           'nomor_ktp'=> '160523918283',
           'email'=> 'farrelfavian18@gmail.com',
           'no_telp'=> '0711353418',
           'no_kk'=> '122293493',
           'npwp'=>'1213232323',
           'sertifikat_migas'=> 'LSP PPT MIGAS',
           'masa_berlaku_sertifikat'=> '2025-07-21',
           'sim'=> 'sim_a',
           'pengalaman_kerja'=> 'PT .Maju Jaya',
           'pengalaman_jabatan'=> 'Electric',
           'masa_jabatan'=> '2 Tahun',
        ]);
    }
}
