<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('finance_categories')->insert([
            'name' => "Pendapatan Desa"
        ]);
        DB::table('finance_categories')->insert([
            'name' => "Belanja Desa"
        ]);
        DB::table('finance_categories')->insert([
            'name' => "Pembiayaan Desa"
        ]);
        DB::table('finance_categories')->insert([
            'name' => "SILPA Desa"
        ]);
    }
}
