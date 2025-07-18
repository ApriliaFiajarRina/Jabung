<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        "nomor_sk",
        "nama_lengkap",
        "nik",
        "ttl",
        "gender",
        "pekerjaan",
        "agama",
        "alamat",
        "keperluan",
        'document_category_id',
        "kewarganegaraan",
        "tanggal_hilang",
        "barang_hilang",
        "waktu_hilang",
        "tempat_hilang",
        "no_whatsapp",
        "nkk",
        "status",
        "nama_usaha",
        "jenis_usaha",
        "klasifikasi",
        "penanggung_jawab",
        "alamat_usaha",
        "berlaku_mulai",
        "nomor_penyalur",
        "lokasi",
        "jangka_waktu",
        "nomor_jbt"
    ];

    public function category(): BelongsTo 
    {
        return $this->belongsTo(DocumentCategory::class, 'document_category_id');
    }
}
