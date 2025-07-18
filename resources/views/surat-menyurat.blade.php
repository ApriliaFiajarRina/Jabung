@include('layouts.header')

@if ($message = Session::get('success'))
<div class="alert alert-primary alert-custom d-flex justify-content-between fixed top-0" role="alert">
    <div>
        {{$message}}
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@elseif ($message = Session::get('errors'))
<div class="alert alert-danger alert-custom d-flex justify-content-between fixed top-0" role="alert">
    <div>
        {{$message}}
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<main class="main">
  <!-- Hero Gunung -->
  <x-hero-gunung title="Surat Menyurat">
    <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
      Surat Menyurat
    </h1>
  </x-hero-gunung>
  <!-- End Hero Gunung -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">
    <div class="container swiper d-flex justify-content-center">
      <div class="swiper-wrapper justify-content-center">
        <!-- Slides -->
        <div class="swiper-slide">
          <a href="{{route('surat.menyurat.skk')}}" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">Surat Keterangan Kehilangan</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="{{route('surat.menyurat.sku')}}" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">Surat Keterangan Usaha</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="{{route('surat.menyurat.skd')}}" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">Surat Keterangan Domisili</p>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="{{route('surat.menyurat.sps')}}" class="pdf-container">
            <img src="{{asset('img/pdf-icon.png')}}" alt="pdf icon" />
            <p class="text-center">Surat <br/> Perizinan <br /> Solar</p>
          </a>
        </div>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  </section>
  <!-- /Features Cards Section -->
</main>

@include('layouts.footer')