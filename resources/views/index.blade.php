@include('layouts.header')

<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section background-index dark-background">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center col-lg-6">
                        <img class="hero-logo" src="{{ asset('img/logo-ponorogo.png') }}" alt="Logo Desa Jabung" />
                        <h2>Sukses Jabung untuk Indonesia</h2>
                        <p>
                            Platform digital pemerintah desa ini menyediakan informasi dan layanan kepada masyarakat
                            melalui website, Instagram, dan aplikasi mobile Android.
                            Bertujuan untuk meningkatkan pelayanan publik, mempermudah akses informasi,
                            meningkatkan transparansi, dan mempererat interaksi antara desa dan warganya.
                        </p>
                        <a href="#get-started" class="btn-get-started">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <!-- Get Started Section -->
    <section id="get-started" class="py-0 get-started section">
        <div class="container">
            <div class="row">
                <div class="pt-0 col-lg-12 content" data-aos="zoom-out" data-aos-delay="100">
                    <div class="header">
                        <div class="header-top">
                            <div class="title-box">
                                <div class="title-with-image">
                                    @if (empty($news))
                                        <div class="title">
                                            <h1>Tidak Ada Berita</h1>
                                        </div>
                                    @else
                                        <div class="image">
                                            <img src="{{ asset('storage/' . $news['firstNews']->photo_path) }}"
                                                alt="Dawet Jabung" />
                                        </div>
                                        <div class="title">
                                            <h1>{{ $news['firstNews']->title }}</h1>
                                            <p>Ponorogo adalah kota yang tak hanya terkenal dengan kekayaan budaya,
                                                tetapi juga menyajikan kenikmatan kuliner yang menggugah selera. Salah
                                                satu ikon kuliner yang melekat erat dengan kota ini adalah Dawet Jabung,
                                                minuman tradisional yang begitu khas dan lezat.</p>
                                            <a href="{{ route('berita.show', ['id' => $news['firstNews']->id]) }}"
                                                class="button">Selengkapnya ></a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="content">
                            <div class="card-grid">
                                @if (empty($news))
                                    <div class="card">
                                        <h2>Tidak Ada Berita</h2>
                                    </div>
                                @else
                                    @foreach ($news['allNewsExceptOne'] as $item)
                                        <div class="card justify-content-between">
                                            <img src="{{ asset('storage/' . $item->photo_path) }}" alt="Dawet Jabung" />
                                            <h2>{{ $item->title }}</h2>
                                            <a href="{{ route('berita.show', ['id' => $item->id]) }}"
                                                class="button">Selengkapnya ></a>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="section-title-custom">Surat Menyurat</h2>
            <div class="pdf-grid">
                <a href="{{ route('surat.menyurat.sku') }}" class="pdf-container">
                    <img src="{{ asset('img/pdf-icon.png') }}" alt="pdf icon" />
                    <p class="text-center">Surat Keterangan Usaha</p>
                </a>
                <a href="{{ route('surat.menyurat.skd') }}" class="pdf-container">
                    <img src="{{ asset('img/pdf-icon.png') }}" alt="pdf icon" />
                    <p class="text-center">Surat Keterangan Domisili</p>
                </a>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('surat.menyurat') }}" class="more-info-btn">Selengkapnya</a>
        </div>
    </div>

    <div class="container mx-auto row">
        <div class="col-lg-12">
            <h2 class="section-title-custom">Transparansi Anggaran</h2>
            @foreach ($jumlahAnggaran as $tahun => $anggaran)
                <div class="budget-section">
                    <h3 class="text-center">Realisasi Tahun Anggaran {{ $tahun }}</h3>
                    <div class="budget-grid">
                        <div class="budget-card">
                            <p>Jumlah Pendapatan</p>
                            <h3>Rp. {{ number_format($anggaran['pendapatanDesa']) }}</h3>
                        </div>
                        <div class="budget-card">
                            <p>Jumlah Belanja</p>
                            <h3>Rp. {{ number_format($anggaran['belanjaDesa']) }}</h3>
                        </div>
                        <div class="budget-card">
                            <p>Jumlah Pembiayaan</p>
                            <h3>Rp. {{ number_format($anggaran['pembiayaanDesa']) }}</h3>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('anggaran.show', ['year' => $tahun]) }}" class="more-info-btn">Selengkapnya
                            ></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-3 section-title-custom">Galery</h2>
            <div class="mx-auto gallery-grid">
                @if ($galeries->isEmpty())
                    <h2 class="text-black fs-2 fw-bold">Tidak Ada Galeri</h2>
                @else
                @foreach ($galeries as $galery)
                <img src="{{asset('storage/'.$galery->photo_path)}}" alt="{{$galery->caption}}" class="myImg">
                @endforeach
                @endif
            </div>
            <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01" style="width:100%">
                    <div id="caption"></div>
                </div>
            <div class="text-center">
                <a href="{{ route('galery') }}" class="mt-4 more-info-btn">Selengkapnya ></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-3 section-title-custom">Wilayah Desa Jabung</h2>
            <div class="map-grid">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.7458390152196!2d111.4852305!3d-7.9215947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790ab7b89963a9%3A0x2583c92c96359f8e!2zQmFsYWkgRGVzYSBKYWJ1bmcgLSDqp4vqpqfqpq3qprvqpqPqprrqprHqppfqpqfqprjqpoE!5e0!3m2!1sid!2sid!4v1722828429800!5m2!1sid!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    </section>
    <!-- /Get Started Section -->
</main>

@include('layouts.footer')

