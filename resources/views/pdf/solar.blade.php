<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<style>
    p {
        margin: 0.2rem;
    }
    pre {
        margin: 0.2rem;
    }
    .min-width-23 {
        display: inline-block;
        min-width: 23px; /* Minimum width of 23 pixels */
    }

    .border {
        border: 1px solid black;
        text-align: center;
    }
    
table, caption, tbody, tfoot, thead, tr, th, td {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */

table {
    border-collapse: collapse;
    border-spacing: 0;
}
</style>
<body>
    <div style="text-align:center; font-family: 'Times New Roman', Times, serif; font-weight:bold; font-size: 1rem; position: relative;">
        <p style="margin: 0px">PEMERINTAH KABUPATEN PONOROGO</p>
        <p style="margin: 0px">KECAMATAN MLARAK</p>
        <p style="font-size: 1rem; margin: 0px">DESA JABUNG</p>
        <p style="font-weight: bold; font-style: italic; margin-top: 0;">Jalan Arjuna Nomor.31</p>
        <p style="letter-spacing: 8px; font-weight: bold;">JABUNG</p> 
        <p style="position:absolute; right:0; top: 90px; font-weight:normal">Kode Pos 63472</p>
    </div>
    <div style="position:absolute; left:0; top:0; width: 110px; height: 110px;">
        <img style="width: 100%;" src="{{asset('img/logo-ponorogo.png')}}" alt="">
    </div>
    <div style="margin-top: 1rem; border: 1px solid black;"></div>
    <div style="margin-top: 1px; border: 2px solid black;"></div>

    <div style="margin-top: 0.5rem; text-align:center">
        <p style="text-decoration: underline; font-size:1rem; font-weight: bold; margin-bottom: 0;">
            SURAT REKOMENDASI PEMBELIAN BBM TERTENTU (JENIS MINYAK SOLAR)
        </p>
        <p style="margin: 0">
            Nomor : {{ $data['nomor_sk'] ?? "____" }}/Kades/405.29.08.10/TANI/JBT/{{ $data['nomor_jbt'] ?? "____" }}/2024
        </p>
    </div>

    <div style="position: relative">
        <p style="margin: 0; font-size: 0.9rem">Dasar Hukum :</p>
        <div style="margin-left: 2rem">
            <table style="width: 100%; border-collapse: collapse; border-spacing: 0; font-size: 0.9rem" cellspacing="0">
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">1. </td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Undang-Undang nomor 22 tahun 2001 tentang minyak dan gas bumi sebagaimana telah diubah dengan undang-undang nomor 6 tahun 2023 tentang penetapan peraturan pemerintah pengganti undang- undang nomor 2 tahun 2022 tentang cipta kerja menjadi undang-undang.
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">2.</td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Undang-Undang nomor 23 tahun 2014 tentang pemerintah daerah sebagaimana telah beberapa kali diubah terakhir dengan undang-undang nomor 6 tahun 2023 tentang penetapan peraturan pemerintah pengganti undang-undang nomor 2 tahun 2022 tentang cipta kerja menjadi undang-undang
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">3. </td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Peraturan presiden nomor 191 tahun 2014 tentang penyediaan, pendistribusian dan harga jual eceran bahan bakar minyak sebagaimana telah beberapa kali diubah terakir dengan peraturan presiden nomor 117 tahun 2021 tentang perubahan ketiga atas peraturan presiden nomor 191 tahun 2014 tentang penyediaan, pendistribusian dan harga jual eceran bahan bakar minyak.
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block;">4. </td>
                    <td style="text-align: justify; padding-left: 8px">
                        Peraturan bahan pengatur hilir minyak dan gas bumi nomor 2 tahun 2023 tentang penerbitan surat rekomendasi untuk pembelian jenis bahan bakar minyak tertentu dan jenis bahan bakar khusus penugasan   
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <p style="margin: 0; font-size: 0.9rem">Dengan ini memberikan rekomendasi kepada :</p>
    <table style="font-family:'Times New Roman', Times, serif; border-collapse: collapse; border-spacing: 0; font-size: 0.9rem" cellspacing="0">
        <tr>
            <td style="padding: 0; font-size: 0.9rem; vertical-align: baseline;">Nama</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="font-size: 0.9rem; padding-left: 3px;">{{ $data['nama_lengkap'] ?? "" }}</td>
        </tr>
        <tr>
            <td style="padding: 0; vertical-align: baseline;">NIK</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="font-size: 0.9rem; padding-left: 3px;">{{ $data['nik'] ?? "" }}</td>
        </tr>
        <tr>
            <td style="padding: 0; vertical-align: baseline; font-size: 0.9rem">Alamat</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="font-size: 0.9rem; padding-left: 3px;">{{ $data['alamat'] ?? "" }}</td>
        </tr>
        <tr>
            <td style="padding: 0; vertical-align: baseline; font-size: 0.9rem">Nama Usaha</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="padding-left: 3px; font-size: 0.9rem">Pertanian</td>
        </tr>
        <tr>
            <td style="padding: 0; vertical-align: baseline; font-size: 0.9rem">Konsumen Usaha</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="padding-left: 3px; font-size: 0.9rem">Usaha Pertanian</td>
        </tr>
        <tr>
            <td style="padding: 0; vertical-align: baseline; font-size: 0.9rem">Jenis Usaha</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="padding-left: 1rem">:</td>
            <td style="padding-left: 3px; font-size: 0.9rem">Pertanian</td>
        </tr>
    </table>
    <p style="margin: 0; font-size: 0.9rem"> Berdasarkan hasil Verifikasi dan Evaluasi Perhitungan :</p>
    <p style="margin: 0; text-align: center; font-size: 0.9rem"> Kebutuhan jenis BBM tertentu yang digunakan untuk sarana sebagai berikut :</p>

    <table style="font-family:'Times New Roman', Times, serif; font-size: 0.9rem">
        <tr>
            <th style="width: max-content;" class="border">No.</th>
            <th class="border">Jenis Alat</th>
            <th class="border">Fungsi Alat</th>
            <th class="border">Jumlah Alat</th>
            <th class="border">Lama penggunaan alat/jam Perhari</th>
            <th class="border">Daya Alat</th>
            <th class="border">Lama Operasi alat Perhari minggu /bulan</th>
            <th class="border">Konsumsi JBT** Alat/Mesin (liter/bulan)</th>
        </tr>
        <tr>
            <td class="border">1</td>
            <td class="border">Diesel</td>
            <td class="border">Pengairan</td>
            <td class="border">3</td>
            <td class="border">12 Jam</td>
            <td class="border">10 PK</td>
            <td class="border">30 Hari</td>
            <td class="border">500 Liter</td>
        </tr>
    </table>

    <p style="margin: 0; font-size: 0.9rem">Diberikan jenis BBM Tertentu (JBT) Jenis Minyak Solar (Gas Oil)</p>
    <div style="margin-left: 4rem; font-size: 0.9rem">
        <table cellspacing="0">
            <tr style="border-spacing: 0;">
                <td style="display: block">1. </td>
                <td style="padding-left: 8px">
                    Alokasi Volume
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px">500 Liter / Bulan</td>
            </tr>
            <tr style="border-spacing: 0;">
                <td style="display: block">2.</td>
                <td style="padding-left: 8px">
                    Tempat Pengambilan
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px">Lembaga Penyalur (SPBU)</td>
            </tr>
            <tr style="border-spacing: 0;">
                <td style="display: block">3. </td>
                <td style="padding-left: 8px">
                    Nomor Lembaga Penyalur 
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px">{{ $data['nomor_penyalur'] ?? "" }}</td>
            </tr>
            <tr style="border-spacing: 0;">
                <td style="display: block">3. </td>
                <td style="padding-left: 8px">
                    Lokasi
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px">{{ $data['lokasi'] ?? "" }}</td>
            </tr>
            <tr style="border-spacing: 0;">
                <td style="display: block">4. </td>
                <td style="padding-left: 8px">
                    Alat Pembelian yang digunakan 
                </td>
                <td style="padding-left: 1.5rem">:</td>
                <td style="padding-left: 3px"> Jerigen Besi</td>
            </tr>
        </table>
    </div> 
    
    <div style="margin-left: 2rem">
            <table style="width: 100%; border-collapse: collapse; border-spacing: 0; font-size: 0.9rem" cellspacing="0">
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">5. </td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px;">
                        Jangka waktu pemberlakuan surat rekomendasi sampai dengan tanggal: {{ \Carbon\Carbon::parse($data->jangka_waktu)->locale('id')->translatedFormat('d F Y') ?? "" }}
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">6.</td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Penyalur SPBU/SPBKB/SPBN/SPBUN** wajib mencatat riwayat pembelian konsumen pengguna dalam format sebagai terlampir
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">7. </td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Surat rekomendasi ini hanya berlaku untuk perseorangan sesuai dengan identitas pemohon surat rekomendasi
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block; line-height: 110%;">8. </td>
                    <td style="text-align: justify; line-height: 110%; padding-left: 8px">
                        Surat rekomendasi ini dilarang untuk diberikan, dipindahtangankan, atau dialihkan kepihak lain.          
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block;">9. </td>
                    <td style="text-align: justify; padding-left: 8px">
                        Jenis BBM tertentu atau jenis BBM Khusus penugasan yang diperoleh tidak untuk diperjual belikan kembali.   
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block;">10. </td>
                    <td style="text-align: justify; padding-left: 8px">
                        Apabila surat rekomendasi tidak dipergunakan sebagaiman mestinya maka akan dicabut dan ditindak lanjuti dengan proses hukum sesuai dengan ketentuan dan peraturan perundang undangan                    
                    </td>
                </tr>
                <tr style="border-spacing: 0;">
                    <td style="display: block;">11. </td>
                    <td style="text-align: justify; padding-left: 8px">
                        Surat rekomendasi ini beserta lampirannya harus dilampirkan kembali saat perpanjangan atau pengajuan ulang permohonan surat rekomendasi.                    
                    </td>
                </tr>
            </table>
    </div>

    
    <div style="margin-top:5rem; position: absolute; font-size: 0.9rem; padding-bottom: 8rem; bottom: -8rem; right: 1rem;">
            <div style="text-align: center; margin-top: 1rem">
                <p>Jabung, {{ \Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y') }}</p>
                <p style="margin-bottom: 5rem">Kepala Desa Jabung</p>
                <p style="text-decoration: underline; font-weight:bold">Budi Ratno</p>
            </div>
    </div>
</body>
</html>