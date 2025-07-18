<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documents')->insert([
            'nama_lengkap' => 'Karen',
            'nik' => '3576447103910009',
            'ttl' => 'Ponorogo, 31 Maret 1975',
            'gender' => "Laki-laki",
            "pekerjaan" => "Manajer",
            "agama" => "Poseidon",
            "alamat" => "Desa Bikini Bottom kecamatan Mlarak kabupaten Ponorogo",
            "keperluan" => "Mengajukan surat Kepemilikan Usaha",
            "document_category_id" => 3,
            "nama_usaha" => "Krusty Krab",
            "jenis_usaha" => "F&B",
            "klasifikasi" => "Makanan",
            "penanggung_jawab" => "Mama Krab",
            "alamat_usaha" => "Jl. Bikini Bottom no.32",
            "berlaku_mulai" => "26 September 2024",
            "no_whatsapp" => '089876346751',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Plankton',
            'nik' => '3576447103910010',
            'ttl' => 'Ponorogo, 30 Februari 2004',
            'gender' => "Laki-laki",
            'kewarganegaraan' => "Bikini Bottom",
            "pekerjaan" => "Serabutan",
            "agama" => "Islam",
            "alamat" => "Desa wringinanom kecamatan sambit kabupaten ponorogo",
            "keperluan" => "Mengajukan surat kehilangan",
            "document_category_id" => 1,
            "nkk" => "3576447103910214",
            "barang_hilang" => "Batu",
            "tanggal_hilang" => "30 Februari 2024",
            "waktu_hilang" => "20:00",
            "tempat_hilang" => "desa Wringinanom",
            "no_whatsapp" => '089876346753',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Squidward Tentacles',
            'nik' => '3576447103910011',
            'ttl' => 'Ponorogo, 30 April 2004',
            'gender' => "Laki-laki",
            "pekerjaan" => "Chef",
            "agama" => "Islam",
            "alamat" => "Desa Jabung kecamatan Mlarak kabupaten Ponorogo",
            "keperluan" => "Mengajukan surat kehilangan",
            "document_category_id" => 2,
            "status" => 'Belum Kawin',
            "no_whatsapp" => '089876346754',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Sandy Cheeks',
            'nik' => '3576447103910006',
            'ttl' => 'Ponorogo, 30 April 2004',
            'gender' => "Laki-laki",
            "pekerjaan" => "Chef",
            "agama" => "Islam",
            "alamat" => "Desa Jabung kecamatan Mlarak kabupaten Ponorogo",
            "keperluan" => "Mengajukan surat kehilangan",
            "document_category_id" => 2,
            "status" => 'Belum Kawin',
            "no_whatsapp" => '089876346754',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Euguene Krab',
            'nik' => '3576447103910007',
            'ttl' => 'Ponorogo, 31 Maret 1975',
            'gender' => "Laki-laki",
            "pekerjaan" => "Manajer",
            "agama" => "Poseidon",
            "alamat" => "Desa Bikini Bottom kecamatan Mlarak kabupaten Ponorogo",
            "keperluan" => "Mengajukan surat Kepemilikan Usaha",
            "document_category_id" => 3,
            "nama_usaha" => "Krusty Krab",
            "jenis_usaha" => "F&B",
            "klasifikasi" => "Makanan",
            "penanggung_jawab" => "Mama Krab",
            "alamat_usaha" => "Jl. Bikini Bottom no.32",
            "berlaku_mulai" => "26 September 2024",
            "no_whatsapp" => '089876346751',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Nyonya Puff',
            'nik' => '3576447103910008',
            'ttl' => 'Ponorogo, 31 Maret 1975',
            'gender' => "Laki-laki",
            "pekerjaan" => "Manajer",
            "agama" => "Poseidon",
            "alamat" => "Desa Bikini Bottom kecamatan Mlarak kabupaten Ponorogo",
            "keperluan" => "Mengajukan surat Kepemilikan Usaha",
            "document_category_id" => 3,
            "nama_usaha" => "Krusty Krab",
            "jenis_usaha" => "F&B",
            "klasifikasi" => "Makanan",
            "penanggung_jawab" => "Mama Krab",
            "alamat_usaha" => "Jl. Bikini Bottom no.32",
            "berlaku_mulai" => "26 September 2024",
            "no_whatsapp" => '089876346751',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Patrick Star',
            'nik' => '3576447103910003',
            'ttl' => 'Ponorogo, 30 Februari 2004',
            'gender' => "Laki-laki",
            'kewarganegaraan' => "Bikini Bottom",
            "pekerjaan" => "Serabutan",
            "agama" => "Islam",
            "alamat" => "Desa wringinanom kecamatan sambit kabupaten ponorogo",
            "keperluan" => "Mengajukan surat kehilangan",
            "document_category_id" => 1,
            "nkk" => "3576447103910214",
            "barang_hilang" => "Batu",
            "tanggal_hilang" => "30 Februari 2024",
            "waktu_hilang" => "20:00",
            "tempat_hilang" => "desa Wringinanom",
            "no_whatsapp" => '089876346753',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Patrick Star',
            'nik' => '3576447103910003',
            'ttl' => 'Ponorogo, 30 April 2004',
            'gender' => "Laki-laki",
            "pekerjaan" => "Chef",
            "agama" => "Islam",
            "alamat" => "Desa Jabung kecamatan Mlarak kabupaten Ponorogo",
            "keperluan" => "Mengajukan surat kehilangan",
            "document_category_id" => 2,
            "status" => 'Belum Kawin',
            "no_whatsapp" => '089876346754',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Spongebob Squarepants',
            'nik' => '3576447103910005',
            'ttl' => 'Ponorogo, 30 April 2004',
            'gender' => "Laki-laki",
            "pekerjaan" => "Chef",
            "agama" => "Islam",
            "alamat" => "Desa Jabung kecamatan Mlarak kabupaten Ponorogo",
            "keperluan" => "Mengajukan surat kehilangan",
            "document_category_id" => 2,
            "status" => 'Belum Kawin',
            "no_whatsapp" => '089876346754',
            "created_at" => "2024-09-26 01:21:32"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Jalu ganteng',
            'nik' => '3576447103910005',
            "alamat" => "Desa Jabung kecamatan Mlarak kabupaten Ponorogo",
            "nomor_penyalur" => "54.634.17",
            "lokasi" => "Siman",
            "document_category_id" => 4,
            "no_whatsapp" => '089876346754',
            "created_at" => "2024-09-26 01:21:32",
            "nomor_jbt" => "128"
        ]);

        DB::table('documents')->insert([
            'nama_lengkap' => 'Harto',
            'nik' => '3576447103910005',
            "alamat" => "Desa Jabung kecamatan Mlarak kabupaten Ponorogo",
            "nomor_penyalur" => "54.634.07",
            "lokasi" => "Jetis",
            "document_category_id" => 4,
            "no_whatsapp" => '089876346754',
            "created_at" => "2024-09-26 01:21:32",
            "nomor_jbt" => "130"
        ]);



    }
}
