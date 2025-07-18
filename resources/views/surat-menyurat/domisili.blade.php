@include('layouts.header')

<main class="main">
  <!-- Hero Gunung -->
  <x-hero-gunung title="Surat Menyurat">
    <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
      Surat Keterangan Domisili
    </h1>
  </x-hero-gunung>
  <!-- End Hero Gunung -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">
    <form class="container" action="send" method="post" id="submitOnce">
      @csrf
        <div class="form-container">
            <div class="mb-3">
                <h5>FORMULIR SURAT KETERANGAN DOMISILI</h5>
                <P>(Untuk Keperluan Administrasi dan Pengurusan Dokumen Resmi)</P>
                <span class="note">* Menunjukkan pertanyaan yang wajib diisi</span>
            </div>

            <div class="mb-3 col">
                <label for="name" id="name" class="form-label">Nama Lengkap <span class="note">*</span></label>
                <input type="text" class="" id="name" name="nama_lengkap" maxlength="50" required>
            </div>
            <div class="mb-3 col">
                <label for="ttl" class="form-label">Tempat, Tanggal Lahir <span class="note">*</span></label>
                <input type="text" class="" id="ttl" name="ttl" required maxlength="50">
            </div>

            <div class="mb-3 col">
                <label for="nik" class="form-label">NIK <span class="note">*</span></label>
                <input type="text" class="" id="nik" name="nik" required maxlength="16" minlength="16">
            </div>
            <div class="mb-3 col">
                <label for="pekerjaan" class="form-label">Pekerjaan <span class="note">*</span></label>
                <input type="text" class="" id="pekerjaan" name="pekerjaan" required maxlength="50">
            </div>

            <div class="mb-3">
                <label for="" class="mb-2">Agama <span class="note">*</span></label> 
                <select name="agama" id="" required>
                    <option value="" disabled selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Buddha">Budha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="mb-2">Jenis Kelamin <span class="note">*</span></label> 
                <div class="radio-btn">
                    <label for="laki-laki" class="radio-container">
                        <input type="radio" name="gender" value="Laki-Laki" id="laki-laki" required> Laki-laki
                        <span class="checkmark"></span>
                    </label>
                </div>
                
                <div class="radio-btn">
                    <label for="perempuan" class="radio-container">
                        <input type="radio" name="gender" value="Perempuan" id="perempuan"> Perempuan
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

        <div class="mb-3">
                <label for="" class="mb-2">Status <span class="note">*</span></label> 
                <div class="radio-btn">
                    <label for="menikah" class="radio-container">
                        <input type="radio" name="status" value="Menikah" id="menikah" required> Menikah
                        <span class="checkmark"></span>
                    </label>
                </div>
                
                <div class="radio-btn">
                    <label for="belum_menikah" class="radio-container">
                        <input type="radio" name="status" value="Belum Menikah" id="belum_menikah"> Belum Menikah
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat <span class="note">*</span></label>
                <textarea class="" id="alamat" name="alamat" placeholder="Isi alamat anda" required></textarea>
            </div>

            <div class="mb-3 col">
                <label for="keperluan" class="form-label">Keperluan <span class="note">*</span></label>
                <textarea name="keperluan" id="keperluan" placeholder="Isi keperluan anda" required></textarea>
            </div>

            <div class="mb-3">
                <label for="no_whatsapp" class="form-label">No. Whatsapp <span class="note">*</span></label>
                <input type="text" class="" id="no_whatsapp" name="no_whatsapp" maxlength="20" required>
            </div>

            <input type="text" value="2" hidden name="document_category_id">
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