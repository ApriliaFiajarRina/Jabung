@include('layouts.header')
<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background background-dawet">
        <div class="container position-relative">
            <nav class="breadcrumbs" style="position: relative; z-index: 9; font-size: 18px;">
                Ada dua orang yang sama-sama murid dari Kyai Hasan Besari yang terletak di pesantren Desa Tegalsari
                Kecamatan Jetis kabupaten Ponorogo. Santri tersebut berasal dari keluarga berbeda yaitu santri yang bernama
                Ki Ageng Morang merupakan utusan dari kerajaan Mataram yang di daulat untuk menggali ilmu dan fenomena agama
                islam dengan harapan akan di kembangkan di negaranya.
            </nav>
            <div class="tombol-selengkapnya" style="position: relative; z-index: 9; font-size: 18px;">
                <a href="{{route('selengkapnya')}}">Selengkapnya</a>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About Section -->
    <section class="container py-3">
        <h2 style="text-align: center; color: #003d81">Visi Desa Jabung</h2>
        <h4 style="text-align: center">"Mewujudkan Desa Jabung yang Aman, Damai, Adil dan Berbudaya"</h4>
        <p style="text-align: center">
            Maju dibidang pendidikan, perekonomian, dan pembangunan yang berpola partisipatif, demokratis, sehat, mandiri,
            dan bertaqwa kepada Tuhan Yang Maha Esa berdasarkan hukum dan peraturan yang berlaku di Negara Republik
            Indonesia untuk menuju Ponorogo lebih maju, berbudaya dan religius.
        </p>

        <h2 style="text-align: center; color: #003d81">Misi Desa Jabung</h2>
        <ol>
            <li>
                Menciptakan rasa aman, damai, tertib, dan tentram dengan senantiasa memupuk dan kesatuan serta penyadaran
                kepada masyarakat desa bahwa kepentingan umum harus didahulukan daripada kepentingan pribadi maupun
                golongan.
            </li>
            <li>
                Mengajak masyarakat desa agar diusahakan untuk anaknya diberi pendidikan setinggi-tingginya sehingga dapat
                menatap masa depan yang lebih baik.
            </li>
            <li>Pemberian pinjaman modal kepada masyarakat desa agar dapat meningkatkan taraf perekonomiannya.</li>
            <li>
                Membangun fisik maupun non fisik desa dengan selalu melibatkan partisipasi masyarakat agar pembangunan
                segera dapat dinikmati.
            </li>
            <li>Memberikan penyuluhan dan mendorong kepada masyarakat untuk senantiasa berperilaku sehat dan mandiri.</li>
            <li>Menggalakkan dan mendorong kesadaran berpolitik masyarakat desa dengna demokrasi.</li>
            <li>
                Pemberdayaan aparatur pemerintah desa dengan baik dan benar yang berfungsi melayani masyarakat secara
                profesional, transparan bebas korupsi, kolusi dan nepotisme.
            </li>
            <li>
                Melibatkan partisipasi masyarakat dalam pelaksaan fungsi-fungsi kepada masyarakat serta melaksanakan
                pelayanan masyarakat dengan cepat, tepat, murah, memuaskan, transparan, akuntabel dan tidak deskriminatif.
            </li>
            <li>
                Menggandeng dan mengajak tokoh agama untuk mengembangkan ketaqwaan masyarakat desa kepada Tuhan Yang Maha
                Esa melalui mimbar - mimbar keagamaan sesuai dengan agama yang dianut.
            </li>
            <li>
                Mengajak masyarakat untuk senantiasa menaati hukum dan peraturan yang berlaku melalui sosialisasi dan
                penyuluhan agar masyarakat taat hukum.
            </li>
        </ol>
    </section>
    <!-- /About Section -->

    <!-- Stats Counter Section -->
    <section class="section-demografi py-3">
        <!-- Section Title -->
        <div class="mb-4">
            <h2 style="text-align: center; color: #003d81">Demografi Desa Jabung</h2>
        </div>
        <!-- End Section Title -->

        <div class="kotak-wilayah container">
            <div class="batas-jumlah-luas-orbitasi">
                <div class="batas-jumlah-wilayah">
                    <div class="batas-dan-penduduk">
                        <div class="batas-wilayah pt-1">
                            <h5 style="text-align: center">
                                <p>Batas Wilayah Desa</p>
                            </h5>
                            <div class="list-batas-wilayah">
                                <ul>
                                    <li>Sebelah Utara</li>
                                    <li>Sebelah Selatan</li>
                                    <li>Sebelah Barat</li>
                                    <li>Sebelah Timur</li>
                                </ul>
                                <ul>
                                    <li>: Desa Bajang</li>
                                    <li>: Desa Tegalsari</li>
                                    <li>: Desa Demangan</li>
                                    <li>: Desan Gandu</li>
                                </ul>
                            </div>
                        </div>
                        <div class="jumlah-penduduk pt-1 mt-2">
                            <h5 style="text-align: center">
                                <p>Jumlah Penduduk Berdasarkan Kelamin</p>
                            </h5>
                            <div class="list-jumlah-penduduk">
                                <ul>
                                    <li>Kepala keluarga</li>
                                    <li>Laki-laki</li>
                                    <li>Perempuan</li>
                                </ul>
                                <ul>
                                    @if (count($penduduk)<  3)
                                    <li>: Data tidak ada</li>
                                    <li>: Data tidak ada</li>
                                    <li>: Data tidak ada</li>
                                    @else
                                    <li>: {{$penduduk[0]['jumlah_penduduk']}} KK</li>
                                    <li>: {{$penduduk[1]['jumlah_penduduk']}} orang</li>
                                    <li>: {{$penduduk[2]['jumlah_penduduk']}} orang</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="luas-wilayah pt-1">
                        <h5 style="text-align: center">
                            <p>Luas Wilayah</p>
                        </h5>
                        <div class="list-luas-wilayah">
                            <ul>
                                <li>Pemukiman</li>
                                <li>Pertanian Sawah</li>
                                <li>Ladang/tegalan</li>
                                <li>Hutan</li>
                                <li>Rawa-rawa</li>
                                <li>Perkantoran</li>
                                <li>Sekolah</li>
                                <li>Jalian</li>
                                <li>Lapangan Sepak Bola</li>
                            </ul>
                            <ul>
                                <li>: 122 ha</li>
                                <li>: 162,5 ha</li>
                                <li>: 161 ha</li>
                                <li>: - ha</li>
                                <li>: - ha</li>
                                <li>: 0,25 ha</li>
                                <li>: 0,75 ha</li>
                                <li>: 80 hs</li>
                                <li>: 1 ha</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="orbitasi pt-1 mt-2">
                    <h5 style="text-align: center">
                        <p>Orbitasi</p>
                    </h5>
                    <div class="list-orbitasi">
                        <ul>
                            <li>Jarak ke ibu kota kecamatan terdekat</li>
                            <li>Lama jarak tempuh ke ibu kota kecamatan</li>
                            <li>Jarak ke ibu kota kabupaten</li>
                            <li>Lama Jarak tempuh ke ibu kota kabupaten</li>
                        </ul>
                        <ul>
                            <li>: 2 KM</li>
                            <li>: 15 menit</li>
                            <li>: 10 KM</li>
                            <li>: 1 Jam</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Stats Counter Section -->

    <!-- Section bagan susunan -->
    <section class="bagan-susunan section py-3">
        <!-- Section Title -->
        <div>
            <h2 style="text-align: center; color: #003d81">
                Bagan Susunan Organisasi dan Tata Kerja <br />
                Pemerintah Desa Jabung, Kecamatan Mlarak
            </h2>
        </div>
        <!-- End Section Title -->
        <div class="container swiper">
            <div class="swiper-bagan-susunan mt-4">
                <div class="swiper-anggota"><img src="{{asset('img/budi-ratno.jpg')}}">
                    <p class="jabatan-anggota">Kepala Desa</p>
                    <p class="nama-anggota">Budi Ratno</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/eko-edi-prayitno.jpg')}}">
                    <p class="jabatan-anggota">Sekretaris Desa</p>
                    <p class="nama-anggota">Eko Budi Prayitno</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/edwin-masyiranto.jpg')}}">
                    <p class="jabatan-anggota">Kaur Perencanaan</p>
                    <p class="nama-anggota">Edwin Masriyanto</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/anang-mawardi.jpg')}}">
                    <p class="jabatan-anggota">Kaur Keuangan</p>
                    <p class="nama-anggota">Anang Mawardi</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/habisma-kartika.jpg')}}">
                    <p class="jabatan-anggota">Kaur Pelayanan</p>
                    <p class="nama-anggota">Habisma Kartika H.</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/profil.png')}}">
                    <p class="jabatan-anggota">Kasi Pemerintahan</p>
                    <p class="nama-anggota">Sumaji</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/ebik-tri-purnomo.jpg')}}">
                    <p class="jabatan-anggota">Kasun 1</p>
                    <p class="nama-anggota">Ebik Tri Purnomo</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/slamet.jpg')}}">
                    <p class="jabatan-anggota">Kasun 2</p>
                    <p class="nama-anggota">Slamet Widiarto</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/siswanto.jpg')}}">
                    <p class="jabatan-anggota">Kasun 3 </p>
                    <p class="nama-anggota">Siswanto N.P.</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/abdul-haris.jpg')}}">
                    <p class="jabatan-anggota">Staff</p>
                    <p class="nama-anggota">Abdul Haris K.</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/profil.png')}}">
                    <p class="jabatan-anggota">Babinsa</p>
                    <p class="nama-anggota">Yusuf</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/profil.png')}}">
                    <p class="jabatan-anggota">Babinkamtibmas</p>
                    <p class="nama-anggota">Andik Wijanarko</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/wiyardi.jpg')}}">
                    <p class="jabatan-anggota">Ketua BPD</p>
                    <p class="nama-anggota">Wiyardi</p>
                </div>
                <div class="swiper-pagination"></div>
            </div>
    </section>
    <!-- End Section bagan susunan -->

    <!-- Section kepala desa -->
    <section class="kepala-desa section py-3">
        <!-- Section Title -->
        <div>
            <h2 style="text-align: center; color: #003d81">
                Susunan BPD Desa Jabung
            </h2>
        </div>
        <!-- End Section Title -->
        <div class="container swiper">
            <div class="swiper-bagan-susunan mt-4">
                <div class="swiper-anggota"><img src="{{asset('img/etriana.jpg')}}">
                    <p class="jabatan-anggota">Etriana</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/kasyono.jpg')}}">
                    <p class="jabatan-anggota">Kasyono</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/muhson.jpg')}}">
                    <p class="jabatan-anggota">Muhson</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/suryanto.jpg')}}">
                    <p class="jabatan-anggota">Suryanto</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/tri-andika.jpg')}}">
                    <p class="jabatan-anggota">Tri Andika</p>
                </div>
                <div class="swiper-anggota"><img src="{{asset('img/damar-rofian.jpg')}}">
                    <p class="jabatan-anggota">Damar Rofian</p>
                </div>

            </div>
    </section>
    <!-- End Section kepala desa -->
</main>
@include('layouts.footer')
