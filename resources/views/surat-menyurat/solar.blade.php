@include('layouts.header')

<main class="main">
  <!-- Hero Gunung -->
  <x-hero-gunung title="Surat Menyurat">
    <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
      Surat Rekomendasi Solar
    </h1>
  </x-hero-gunung>
  <!-- End Hero Gunung -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">
    <form class="container" action="send" method="post" id="submitOnce">
      @csrf
        <div class="form-container">
            <div class="mb-3">
                <h5>SURAT REKOMENDASI PEMBELIAN BBM TERTENTU </h5>
                <p>(Untuk Keperluan Pembelian  MINYAK SOLAR)</p>
                <span class="note">* Menunjukkan pertanyaan yang wajib diisi</span>
            </div>

            <div class="mb-3 col">
                <label for="name" id="name" class="form-label">Nama Lengkap <span class="note">*</span></label> 
                <input type="text" class="" id="name" name="nama_lengkap" maxlength="50" required>
            </div>
            <div class="mb-3 col">
                <label for="nik" class="form-label">NIK <span class="note">*</span></label> 
                <input type="text" class="" id="nik" name="nik" required maxlength="16" minlength="16">
            </div>

            <div class="mb-3">
                <label for="" class="mb-2">Lokasi<span class="note"> *</span></label> 
                <div class="radio-btn">
                    <label for="jetis" class="radio-container">
                        <input type="radio" name="lokasi" value="Jetis" id="jetis" required> Jetis
                        <span class="checkmark"></span>
                    </label>
                </div>
                
                <div class="radio-btn">
                    <label for="siman" class="radio-container">
                        <input type="radio" name="lokasi" value="Siman" id="siman"> Siman
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat <span class="note">*</span></label> 
                <textarea class="" id="alamat" name="alamat" placeholder="Isi alamat anda" required></textarea>
            </div>

            <div class="mb-3">
                <label for="no_whatsapp" class="form-label">No. Whatsapp <span class="note">*</span></label> 
                <input type="text" class="" id="no_whatsapp" name="no_whatsapp" maxlength="20" required>
            </div>

            <input type="text" value="4" hidden name="document_category_id">
            <button type="submit" id="btn-submitOnce">
                <a class="more-info-btn">Kirim</a>
            </button>
        </div>
    </form>
  </section>
  <!-- /Features Cards Section -->
</main>

<script src="{{asset('js/submitButtonOnce.js')}}"></script>
@include('layouts.footer')