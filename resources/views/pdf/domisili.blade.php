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
    <div style="text-align:center; font-family: 'Times New Roman', Times, serif; font-weight:bold; font-size: 1.2rem;">
        <p>PEMERINTAH KABUPATEN PONOROGO</p>
        <p>KECAMATAN MLARAK</p>
        <p style="font-size: 1.4rem">PEMERINTAH DESA JABUNG</p>
        <p style="font-weight: normal;">Jalan Arjuno No.31</p>
        <p>email: <span style="font-weight: normal;">dsjabung@gmail.com</span></p> 
    </div>
    <div style="position:absolute; left:0; top:0; width: 140px; height: 140px;">
        <img style="width: 100%;" src="{{asset('img/logo-ponorogo.png')}}" alt="">
    </div>
    <div style="margin-top: 2rem; border: 1px solid black;"></div>
    <div style="margin-top: 4px; border: 2px solid black;"></div>

    <div style="margin-top: 1.5rem; text-align:center">
        <p style="text-decoration: underline; font-size:1.1rem; font-weight: bold; margin-bottom: 0;">
            SURAT KETERANGAN DOMISILI
        </p>
        <p style="margin-top: 0">
            Nomor : 407/<span class="{{ empty($data['nomor_sk']) ? 'min-width-23' : '' }}">{{ $data['nomor_sk'] ?? '' }}</span>/[405.30.08.10]/{{date('Y')}}
        </p>
    </div>

    <div style="margin-top: 1.3rem;">
        <p>
            Yang bertanda tangan di bawah ini menerangkan dengan sebenarnya bahwa :
        </p>
    </div>

    <table style="margin-top: 1.3rem; font-family:'Times New Roman', Times, serif;">
    <tr>
        <td>Nama</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{ $data['nama_lengkap'] ?? "" }}</td>
    </tr>
    <tr>
        <td>Tempat / Tanggal Lahir</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{ $data['ttl'] ?? "" }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{ $data['gender'] ?? "" }}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{ $data['agama'] ?? "" }}</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{ $data['pekerjaan'] ?? "" }}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{ $data['status'] ?? "" }}</td>
    </tr>
    <tr>
        <td>NIK</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>:</td>
        <td>{{ $data['nik'] ?? "" }}</td>
    </tr>
    </table>

    <div style="margin-top: 1rem; text-align: justify;">
        <p>Adalah penduduk desa kami yang berdomisili di {{ $data['alamat'] ?? '..............................' }}</p>
    </div>

    <div style="margin-top: 2rem;">
        <p>Demikian surat keterangan ini dibuat dengan sebenarnya dan dikeluarkan untuk {{ $data['keperluan'] ?? '..............................' }}</p>
    </div>

    <div style="margin-top:5rem; position: relative">
        <div style="position: absolute; right: 5rem">
            <div style="text-align: center; margin-top: 1rem">
                <p>Jabung, {{ \Carbon\Carbon::parse($data->updated_at)->locale('id')->translatedFormat('d F Y') }}</p>
                <p style="margin-bottom: 4rem">Kepala Desa Jabung</p>
                <p style="text-decoration: underline; font-weight:bold">Budi Ratno</p>
            </div>
        </div>
    </div>
</body>
</html>