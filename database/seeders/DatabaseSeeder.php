<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $this->call([
            FinanceCategorySeeder::class,
            FinanceSeeder::class,
            FinancePdfSeeder::class,
            GalerySeeder::class,
            NewsSeeder::class,
            PendudukSeeder::class,
            UserSeeder::class,
            DocumentCategorySeeder::class,
            DocumentSeeder::class
        ]);
    }
}
