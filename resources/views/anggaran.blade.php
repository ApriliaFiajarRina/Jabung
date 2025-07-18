@include('layouts.header')
<main class="main">
    <!-- Page Title -->
    <x-hero-gunung title="Surat Menyurat">
        <h1 class="fs-3" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
            Transparansi Anggaran Pendapatan dan Belanja Daerah
        </h1>
        <h2 class="fs-5" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">Desa Jabung, Kecamatan Mlarak, Kabupaten Ponorogo</h2>
    </x-hero-gunung>
    <!-- End Page Title -->

    <!-- Info Grafik Section 2023 -->
    <section class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h2 style="color: #003d81">Info Grafik APBD</h2>
                <h2 style="color: #003d81; margin-bottom: 40px;">Realisasi Tahun Anggaran {{$anggaran['year']}}</h2>
            </div>
            <div class="dropdown">
                <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Tahun
                </button>
                <ul class="dropdown-menu">
                    @foreach ($anggaran['listAnggaranYear'] as $year)
                    <li><a class="dropdown-item" href="{{route('anggaran.show', ['year' => $year])}}">{{$year}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>
    <!-- end info grafik Section 2023-->

    <section class="container-pendapatan-desa">
        <h2 style="text-align: center; color: #003d81;">Pendapatan Desa</h2>
        <div class="parent-container-tabel-anggaran">
            <div class="container container-tabel-anggaran gap-3">
                @foreach ($anggaran['dataAnggaran']['pendapatanDesa'] as $finance)
                <div class="tabel-anggaran">
                    <div class="title-tabel-anggaran py-1 d-flex justify-content-center align-items-center h-30">
                        <h5 class="mb-0">{{$finance->name}}</h5>
                    </div>
                    <div class="py-1 d-flex justify-content-center align-items-center h-70">
                        <p class="fs-3 mb-0">Rp.{{number_format($finance->amount)}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container-jumlah-pendapatan">
                <div class="jumlah-pendapatan">
                    <h2>Jumlah Pendapatan</h2>
                    <div class="tabel-jumlah-pendapatan">
                        <p id="jumlah-pendapatan">Rp. {{number_format($anggaran['sumAnggaran']['pendapatanDesa'])}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- belanja desa section -->
    <section class="container-belanja-desa">
        <div class="container">
            <!-- section title -->
            <div>
                <h2 style="color: #003d81; text-align: center;">Belanja Desa</h2>
            </div>
            <!-- end section title -->
            <div class="parent-container-tabel-anggaran">
                <div class="container-tabel-anggaran gap-3">
                    @foreach ($anggaran['dataAnggaran']['belanjaDesa'] as $finance)
                    <div class="tabel-anggaran">
                        <div class="title-tabel-anggaran py-1 d-flex justify-content-center align-items-center h-30">
                            <h5 class="mb-0">{{$finance->name}}</h5>
                        </div>
                        <div class="py-1 d-flex justify-content-center align-items-center h-70">
                            <p class="fs-3 mb-0">Rp.{{number_format($finance->amount)}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="container-jumlah-pendapatan">
                    <div class="jumlah-pendapatan">
                        <h2>Jumlah Pendapatan</h2>
                        <div class="tabel-jumlah-pendapatan">
                            <p id="jumlah-pendapatan">Rp. {{number_format($anggaran['sumAnggaran']['belanjaDesa'])}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end belanja desa section -->

    <!-- pembiyaan desa section -->
    <section class="container-pembiayaan-desa">
        <!-- section title -->
        <div>
            <h2 style="text-align: center; color: #003d81;">Pembiayaan Desa</h2>
        </div>
        <!-- end section title -->
        <div class="parent-container-tabel-anggaran">
            <div class="container container-tabel-anggaran gap-3">
                @foreach ($anggaran['dataAnggaran']['pembiayaanDesa'] as $finance)
                <div class="tabel-anggaran">
                    <div class="title-tabel-anggaran py-1 d-flex justify-content-center align-items-center h-30">
                        <h5 class="mb-0">{{$finance->name}}</h5>
                    </div>
                    <div class="py-1 d-flex justify-content-center align-items-center h-70">
                        <p class="fs-3 mb-0">Rp.{{number_format($finance->amount)}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container-jumlah-pendapatan">
                <div class="jumlah-pendapatan">
                    <h2>Jumlah Pendapatan</h2>
                    <div class="tabel-jumlah-pendapatan">
                        <p id="jumlah-pendapatan">Rp. {{number_format($anggaran['sumAnggaran']['pembiayaanDesa'])}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pembiayaan data section -->

    <!-- SILPA section -->
    <section class="container-pembiayaan-desa">
        <!-- section title -->
        <div>
            <h2 style="text-align: center; color: #003d81;">SILPA Desa</h2>
        </div>
        <!-- end section title -->
        <div class="parent-container-tabel-anggaran">
            <div class="container container-tabel-anggaran gap-3">
                @foreach ($anggaran['dataAnggaran']['silpaDesa'] as $finance)
                <div class="tabel-anggaran">
                    <div class="title-tabel-anggaran py-1 d-flex justify-content-center align-items-center h-30">
                        <h5 class="mb-0">{{$finance->name}}</h5>
                    </div>
                    <div class="py-1 d-flex justify-content-center align-items-center h-70">
                        <p class="fs-3 mb-0">Rp.{{number_format($finance->amount)}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container-jumlah-pendapatan">
                <div class="jumlah-pendapatan">
                    <h2>Jumlah Pendapatan</h2>
                    <div class="tabel-jumlah-pendapatan">
                        <p id="jumlah-pendapatan">Rp. {{number_format($anggaran['sumAnggaran']['silpaDesa'])}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end SILPA section -->

    <!-- APBD desa jabung section -->
    <!-- Services Section -->
    <section id="services" class="services section light-background">
        <h2 style="text-align: center; color: #003d81;" class="mb-4">APBDesa Jabung</h2>
        <div class="container swiper d-flex justify-content-center">
            <div class="swiper-wrapper">
                <!-- Slides -->
                @if($docs->isEmpty())
                <h1 class="fs-2 text-black text-center fw-bold mx-auto">Dokumen Tidak Ada</h1>
                @else
                @foreach ($docs as $doc)
                <div class="swiper-slide">
                    <a href="{{asset('storage/'.$doc->file_path)}}" target="_blank" class="pdf-container text-center">
                        <img src="{{asset('img/pdf-icon.png')}}" alt="" />
                        <p>{{$doc->nama}}</p>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </section>
    <!-- /Features Cards Section -->
</main>
@include('layouts.footer')