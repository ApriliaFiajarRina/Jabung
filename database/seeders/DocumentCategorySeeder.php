<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('document_categories')->insert([
            'name' => "kehilangan",
        ]);
        DB::table('document_categories')->insert([
            'name' => "domisili",
        ]);
        DB::table('document_categories')->insert([
            'name' => "usaha",
        ]);
        DB::table('document_categories')->insert([
            'name' => "solar",
        ]);
    }
}
