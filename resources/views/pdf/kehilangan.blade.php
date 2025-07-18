<!DOCTYPE html>
<html>
<head>
    <title>{{$data['nama_lengkap']}}_{{$data['nik']}}</title>
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
</style>
<body>
    <div style="text-align:center; font-family: Arial, Helvetica, sans-serif;">
        <p>PEMERINTAH KABUPATEN PONOROGO</p>
        <p>KECAMATAN MLARAK</p>
        <p style="font-weight: bold;">DESA JABUNG</p>
        <p>Jalan Arjuna Nomor 31</p>
        <p>JABUNG</p>
    </div>
    <p style="position:absolute; right:0; font-family: Arial, Helvetica, sans-serif;">Kode Pos 63472</p>
    <div style="position:absolute; left:0; top:0; width: 140px; height: 140px;">
        <img style="width: 100%;" src="{{asset('img/logo-ponorogo.png')}}" alt="">
    </div>
    <div style="margin-top: 2rem; border: 1px solid black;"></div>
    <div style="margin-top: 4px; border: 2px solid black;"></div>

    <div style="margin-top: 1.5rem; text-align:center">
        <p style="text-decoration: underline; letter-spacing: 1px; font-size:1.1rem; font-weight: semibold; margin-bottom: 0;">
            SURAT KETERANGAN
        </p>
        <p style="margin-top: 0">
            Nomor : 407/<span class="{{ empty($data['nomor_sk']) ? 'min-width-23' : '' }}">{{ $data['nomor_sk'] ?? '' }}</span>/405.29.08.10/{{date('Y')}}
        </p>
    </div>

    <div style="margin-top: 2rem;">
        <p>
            Yang bertanda tangan di bawah ini Kami Kepala Desa Jabung Kecamatan Mlarak Kabupaten Ponorogo menerangkan bahwa :
        </p>
    </div>

    <table style="margin-top: 2rem; font-family:'Times New Roman', Times, serif;">
    <tr>
        <td>Nama</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{$data['nama_lengkap']}}</td>
    </tr>
    <tr>
        <td>NIK</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{$data['nik']}}</td>
    </tr>
    <tr>
        <td>Tempat Tgl. Lahir</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{$data['ttl']}}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{$data['gender']}}</td>
    </tr>
    <tr>
        <td>Kewarganegaraan</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{$data['kewarganegaraan']}}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{$data['pekerjaan']}}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{$data['agama']}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{$data['alamat']}}</td>
    </tr>
    </table>

    <div style="margin-top: 3rem">
        <p> Surat Keterangan ini diberikan untuk keperluan : {{$data['keperluan']}}</p>
    </div>

    <div style="margin-top: 1rem; text-align: justify;">
        <p>Menerangkan bahwa orang tersebut diatas telah kehilangan {{ $data['barang_hilang'] ?? '..............................' }} atas nama {{ $data['nama_lengkap'] ?? '..............................' }} NIK: {{ $data['nik'] ?? '..............................' }} NKK:  {{ $data['nkk'] ?? '..............................' }} diketahui hilang pada hari/tanggal {{ \Carbon\Carbon::parse($data->tanggal_hilang)->locale('id')->translatedFormat('l, d F Y') }} Waktu Pukul: {{ $data['waktu_hilang'] ?? '..............................' }} WIB. Di {{ $data['tempat_hilang'] ?? '..............................' }}. Surat keterangan ini digunakan untuk  {{ $data['keperluan'] ?? '..............................' }}</p>
    </div>

    <div style="margin-top: 1.5rem;">
        <p>Demikian surat keterangan ini dibuat untuk dapat dipergunakan seperlunya</p>
    </div>

    <div style="margin-top:3rem; position: relative">
        <div style="position: absolute; right: 5rem">
        <p>Jabung, {{ \Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y') }}</p>
        <div style="text-align: center; margin-top: 1rem">
                <p>Mengetahui,</p>
                <p style="margin-bottom: 4rem">Kepala Desa Jabung</p>
                <p style="text-decoration: underline">Budi Ratno</p>
            </div>
        </div>
        <div style="position: absolute; left: 5rem; top: 2.7rem">
        <div style="text-align: center; margin-top: 1rem">
                <p style="margin-bottom: 4rem">Pemohon</p>
                <p style="text-decoration: underline">{{$data['nama_lengkap']}}</p>
            </div>
        </div>
    </div>
</body>
</html>