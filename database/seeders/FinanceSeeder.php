<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pendapatan Desa
        DB::table('finances')->insert([
            'name' => "Pendapatan Asli Desa",
            'amount' => 148673000,
            'finance_category_id' => 1,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Pendapatan Asli Desa",
            'amount' => 176146000,
            'finance_category_id' => 1,
            'year' => 2024
        ]);
        DB::table('finances')->insert([
            'name' => "Alokasi Dana Desa",
            'amount' => 592071546,
            'finance_category_id' => 1,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Alokasi Dana Desa",
            'amount' => 424959500,
            'finance_category_id' => 1,
            'year' => 2024
        ]);
        DB::table('finances')->insert([
            'name' => "Dana Desa",
            'amount' => 773391000,
            'finance_category_id' => 1,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Dana Desa",
            'amount' => 1035059000,
            'finance_category_id' => 1,
            'year' => 2024
        ]);
        DB::table('finances')->insert([
            'name' => "Pendapatan Lainnya",
            'amount' => 2776198.73,
            'finance_category_id' => 1,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Bagi Hasil Pajak dan Retribusi Daerah Kab/Kota",
            'amount' => 14972047,
            'finance_category_id' => 1,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Bantuan Keuangan Kabupaten/Kota",
            'amount' => 150000000,
            'finance_category_id' => 1,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Bantuan Keuangan Khusus Daerah",
            'amount' => 50000000,
            'finance_category_id' => 1,
            'year' => 2024
        ]);

        // Belanja Desa
        DB::table('finances')->insert([
            'name' => "Bidang Penyelenggaraan Pemerintahan Desa",
            'amount' => 549570008,
            'finance_category_id' => 2,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Penyelenggaraan Pemerintahan Desa",
            'amount' => 539133509,
            'finance_category_id' => 2,
            'year' => 2024
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Pelaksanaan Pembangunan Desa",
            'amount' => 921098350,
            'finance_category_id' => 2,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Pelaksanaan Pembangunan Desa",
            'amount' => 344201700,
            'finance_category_id' => 2,
            'year' => 2024
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Pembinaan Kemasyarakatan",
            'amount' => 173505000,
            'finance_category_id' => 2,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Pembinaan Kemasyarakatan",
            'amount' => 201374000,
            'finance_category_id' => 2,
            'year' => 2024
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Pemberdayaan Masyarakat",
            'amount' => 77927100,
            'finance_category_id' => 2,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Pemberdayaan Masyarakat",
            'amount' => 530760800,
            'finance_category_id' => 2,
            'year' => 2024
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Penanggulanagan Bencana, Darurat & Mendesak",
            'amount' => 79200000,
            'finance_category_id' => 2,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Bidang Penanggulanagan Bencana, Darurat & Mendesak",
            'amount' => 10800000,
            'finance_category_id' => 2,
            'year' => 2024
        ]);

        //  Pembiayaan Desa
        DB::table('finances')->insert([
            'name' => "Penarikan Pembiayaan",
            'amount' => 137684423,
            'finance_category_id' => 3,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Pengeluaran Pembiayaan",
            'amount' => 10000000,
            'finance_category_id' => 3,
            'year' => 2023
        ]);
        DB::table('finances')->insert([
            'name' => "Pengeluaran Pembiayaan",
            'amount' => 68162200,
            'finance_category_id' => 3,
            'year' => 2024
        ]);
        DB::table('finances')->insert([
            'name' => "Penerimaan Pembiayaan / SILPA Tahun 2023",
            'amount' => 8267709,
            'finance_category_id' => 3,
            'year' => 2024
        ]);

        // SILPA
        DB::table('finances')->insert([
            'name' => "SILPA Tahun Berjalan",
            'amount' => 8267756,
            'finance_category_id' => 4,
            'year' => 2023
        ]);
    }
}
