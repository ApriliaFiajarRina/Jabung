<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
    @if (isset($style))
    <link href="{{asset('css/' . $style . '.css') }}" rel="stylesheet">
    @endif


    <!-- Swiper -->
    <link href="{{asset('css/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />
</head>

<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{route('index')}}" class="custom-navbar">
                <img src="{{asset('img/logo-ponorogo.png')}}" alt="Logo Ponorogo" />
                <div class="nama-logo">
                    <h1 class="sitename fs-4 mb-0">Desa Jabung</h1>
                    <p class="my-0">Kec. Mlarak. Kab. Ponorogo</p>
                    <p class="my-0">Jawa Timur</p>
                </div>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('index')}}" class="{{request()->is('/') || request()->is('berita*') ? 'active' : ''}}">Home</a></li>
                    <li><a href="{{route('about')}}" class={{request()->is('about*') ? 'active' : '' }}>Profil Desa</a></li>
                    <li><a href="{{route('surat.menyurat')}}" class={{request()->is('surat-menyurat*') ? 'active' : '' }}>Surat Menyurat</a></li>
                    <li><a href="{{route('anggaran')}}" class={{request()->is('anggaran*') ? 'active' : '' }}>Anggaran</a></li>
                    <li><a href="{{route('galery')}}" class={{request()->is('galery*') ? 'active' : '' }}>Galery</a></li>
                    <li><a href="{{route('pengaduan')}}" class={{request()->is('pengaduan*') ? 'active' : '' }}>Pengaduan</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>