<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Jabung</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap/bootstrap-icons.css')}}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('css/' . $style . '.css') }}" rel="stylesheet">

    <!-- Swiper -->
    <link href="{{asset('css/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />
</head>

<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{route('index')}}" class="custom-navbar">
                <img src="{{asset('img/logo-ponorogo.png')}}" alt="Logo Ponorogo" />
                <div class="nama-logo">
                    <h1 class="sitename">Desa Jabung</h1>
                    <span style="font-size: 14px">Kec. Mlarak. Kab. Ponorogo</span> <br />
                    <span style="font-size: 14px">Jawa Timur</span>
                </div>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('index')}}" class="{{request()->is('/') || request()->is('berita*') ? 'active' : ''}}">Home</a></li>
                    <li><a href="{{route('about')}}" class={{request()->is('about*') ? 'active' : '' }}>Profil Desa</a></li>
                    <li><a href="{{route('surat.menyurat')}}" class={{request()->is('surat-menyurat*') ? 'active' : '' }}>Surat Menyurat</a></li>
                    <li><a href="{{route('anggaran')}}" class={{request()->is('anggaran*') ? 'active' : '' }}>Anggaran</a></li>
                    <li><a href="{{route('galery')}}" class={{request()->is('galery*') ? 'active' : '' }}>Galery</a></li>
                    <li><a href="#">Pengaduan</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <footer id="footer" class="custom-footer">
        <div class="container p-4">
            <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                <div class="d-flex gap-3 custom-icon">
                    <a href="#">
                        <img src="{{asset('img/email-logo.png')}}" alt="email" />
                    </a>
                    <a href="#">
                        <img src="{{asset('img/ig-logo.png')}}" alt="logo" />
                    </a>
                    <a href="#">
                        <img src="{{asset('img/fb-logo.png')}}" alt="facebook" />
                    </a>
                    <a href="#">
                        <img src="{{asset('img/ytb-logo.png')}}" alt="youtube" />
                    </a>
                </div>
                <p class="text-white text-center mb-0 mt-2"></p>
            </div>
            <hr style="border-bottom: 3px solid #fff" />
            <div class="d-flex flex-column gap-1 justify-content-between">
                <div class="text-white footer-text">
                    <p class="text-center mb-2 text-white">Jl. Arjuna No. 31, Desa Jabung, Kec. Mlarak, Ponorogo</p>
                </div>
                <div class="text-white text-center">© 2024 Sincere Burch Project</div>
            </div>
        </div>
    </footer>

    <!-- Vendor JS Files -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/swiper.js')}}"></script>

</body>

</html>