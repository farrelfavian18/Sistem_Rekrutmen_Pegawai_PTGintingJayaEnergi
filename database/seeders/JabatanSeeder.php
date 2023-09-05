<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatans')->insert([
            'kode_jabatan' => '01',
            'nama_jabatan' => 'Rig Superintendent',
            'deskripsi' => 'LSP "PPT MIGAS" Sertifikasi (OUPS) No.3',
        ]);
    }
}
