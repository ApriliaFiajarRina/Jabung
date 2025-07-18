<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage7.jpg",
            'caption' => 'Pelatihan Pakan Ternak',
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage8.jpg",
            'caption' => "Pembangunan Drainase",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage9.jpg",
            'caption' => "Pembangunan Mushola Kantor Desa",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage10.jpg",
            'caption' => "Pembangunan Paving Jl. Prabakusuma",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage11.jpg",
            'caption' => "Pembangunan Talud",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage12.jpg",
            'caption' => "Penanaman Bibit Alpukat",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage13.jpg",
            'caption' => "Pengembangan KRPL",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage14.jpg",
            'caption' => "Pengingkatan Aspal Jalan Srikandhi",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage15.jpg",
            'caption' => "Peningkatan (Hotmix) Jl. Arjuna",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage16.jpg",
            'caption' => "Pentas Reog Dalam Rangka HUT RI ke 78",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage17.jpg",
            'caption' => "Study Tour at Jogja Mina Padi",
        ]);
        DB::table('galeries')->insert([
            'photo_path' => "dummyImage18.jpg",
            'caption' => "TPS 3R",
        ]);
    }
}
