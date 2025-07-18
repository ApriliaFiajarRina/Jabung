@include('layouts.header')

<main class="main">
  <!-- Hero Gunung -->
  <x-hero-gunung title="Surat Menyurat">
    <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
      Surat Kehilangan
    </h1>
  </x-hero-gunung>
  <!-- End Hero Gunung -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">
    <form class="container" action="send" method="post" id="submitOnce">
    @csrf
        <div class="form-container">
            <div class="mb-3">
                <h5>FORMULIR SURAT KETERANGAN KEHILANGAN</h5>
                <P>(Untuk Pengajuan Kehilangan Barang atau Dokumen Penting)</P>
                <span class="note">* Menunjukkan pertanyaan yang wajib diisi</span>
            </div>

            <div class="mb-3">
                <label for="name" id="name" class="form-label">Nama Lengkap <span class="note">*</span></label> 
                <input type="text" class="" id="name" name="nama_lengkap" maxlength="50" required>
            </div>

            <div class="mb-3">
                <label for="ttl" class="form-label">Tempat, Tanggal Lahir <span class="note">*</span></label>
                <input type="text" class="" id="ttl" name="ttl" required>
            </div>

            <div class="mb-3 ">
                <label for="nik" class="form-label">NIK <span class="note">*</span></label>
                <input type="text" class="" id="nik" name="nik" required maxlength="16" minlength="16">
            </div>

            <div class="mb-3 ">
                <label for="nkk" class="form-label">NKK <span class="note">*</span></label> 
                <input type="text" class="" id="nkk" name="nkk" required maxlength="16" minlength="16">
            </div>

            <div class="mb-3">
                    <label for="" class="mb-2">Jenis Kelamin <span class="note">*</span></label> 
                    <div class="radio-btn">
                        <label for="laki-laki" class="radio-container">
                            <input type="radio" name="gender" value="laki-laki" id="laki-laki" required> Laki-laki
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    
                    <div class="radio-btn">
                        <label for="perempuan" class="radio-container">
                            <input type="radio" name="gender" value="perempuan" id="perempuan"> Perempuan
                            <span class="checkmark"></span>
                        </label>
                    </div>
            </div>

            <div class="mb-3 ">
                <label for="pekerjaan" class="form-label">Pekerjaan <span class="note">*</span></label> 
                <input type="text" class="" id="pekerjaan" name="pekerjaan" required>
            </div>

            <div class="mb-3">
                    <label for="agama" class="mb-2">Agama <span class="note">*</span></label>  <br>
                    <select required name="agama" id="agama">
                        <option value="" disabled selected>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="budha">Budha</option>
                        <option value="kong hu chu">Kong Hu Chu</option>
                        <option value="hindu">Hindu</option>
                    </select>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat <span class="note">*</span></label> 
                <textarea name="alamat" id="alamat" placeholder="Isi alamat anda" required></textarea>
            </div>

            <div class="mb-3">
                <label for="kewarganegaraan" class="form-label">Kewarganegaraan <span class="note">*</span></label> 
                <input type="text" class="" id="kewarganegaraan" name="kewarganegaraan" required>
            </div>
            <div class="mb-3">
                <label for="keperluan" class="form-label">Keperluan <span class="note">*</span></label> 
                <textarea name="keperluan" id="keperluan" placeholder="Isi Keperluan Anda" required></textarea>
            </div>

            <div class="mb-3 ">
                <label for="tanggal_hilang" class="form-label">Tanggal Hilang <span class="note">*</span></label> 
                <input type="date" class="" id="tanggal_hilang" name="tanggal_hilang" required>
            </div>
            <div class="mb-3 ">
                <label for="barang_hilang" class="form-label">Barang Hilang <span class="note">*</span></label> 
                <input type="text" class="" id="barang_hilang" name="barang_hilang" required>
            </div>

            <div class="mb-3 ">
                <label for="waktu_hilang" class="form-label">Waktu Hilang <span class="note">*</span></label> 
                <input type="time" class="" id="waktu_hilang" name="waktu_hilang" required>
            </div>
            <div class="mb-3 ">
                <label for="tempat_hilang" class="form-label">Tempat Hilang <span class="note">*</span></label> 
                <input type="text" class="" id="tempat_hilang" name="tempat_hilang" required>
            </div>

            <div class="mb-3">
                <label for="no_whatsapp" class="form-label">No. Whatsapp <span class="note">*</span></label> 
                <input type="text" class="" id="no_whatsapp" name="no_whatsapp" required>
            </div>
            <input type="text" value="1" hidden name="document_category_id">
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