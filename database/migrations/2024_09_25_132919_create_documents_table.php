<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();

            // required for all documents
            $table->string('nomor_sk', 10)->nullable(value: true);
            $table->string("nama_lengkap", 50)->nullable(false);
            $table->string("nik", 16)->nullable(false);
            $table->string("ttl", 50)->nullable(true);
            $table->string("gender", 10)->nullable(value: true);
            $table->string("pekerjaan", 50)->nullable(true);
            $table->string("agama", 50)->nullable(true);
            $table->string("alamat", 100)->nullable(false);
            $table->string("keperluan", 100)->nullable(true);
            $table->foreignId('document_category_id')->references('id')->on('document_categories')->onDelete('cascade');

            // document kehilangan
            $table->string("kewarganegaraan", 50)->nullable(true);
            $table->string("tanggal_hilang", 50)->nullable(true);
            $table->string("barang_hilang", 50)->nullable(true);
            $table->string("waktu_hilang", 50)->nullable(true);
            $table->string("tempat_hilang", 50)->nullable(true);
            $table->string("no_whatsapp", 20)->nullable(true);
            $table->string("nkk", 20)->nullable(true);

            // document domisi
            $table->string("status", 20)->nullable(true);

            // document usaha
            $table->string("nama_usaha", 50)->nullable(true);
            $table->string("jenis_usaha", 50)->nullable(true);
            $table->string("klasifikasi", 50)->nullable(true);
            $table->string("penanggung_jawab", 50)->nullable(true);
            $table->string("alamat_usaha", 100)->nullable(true);
            $table->string("berlaku_mulai", 50)->nullable(true);

            // document solar
            $table->string("nomor_penyalur", 50)->nullable(true);
            $table->string("lokasi", 50)->nullable(true);
            $table->string("jangka_waktu", 50)->nullable(true);
            $table->string("nomor_jbt", 10)->nullable(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
