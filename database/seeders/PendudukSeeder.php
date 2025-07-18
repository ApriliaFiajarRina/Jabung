<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penduduks')->insert([
            'tipe_penduduk' => 'Kepala Keluarga',
            'jumlah_penduduk' => 841,
        ]);
        DB::table('penduduks')->insert([
            'tipe_penduduk' => 'laki-laki',
            'jumlah_penduduk' => 1521,
        ]);
        DB::table('penduduks')->insert([
            'tipe_penduduk' => 'perempuan',
            'jumlah_penduduk' => 1548,
        ]);
    }
}
