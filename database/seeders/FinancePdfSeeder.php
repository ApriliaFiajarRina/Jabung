<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancePdfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pdf_anggarans')->insert([
            'nama' => "Pendapatan Desa",
            'file_path' => 'dummyDocs4.pdf'
        ]);
    }
}
