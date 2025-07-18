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
    <x-hero-gunung>
        <h1 class="fs-1" style="font-family: 'Poppins', sans-serif; position: relative; z-index: 9">
            Pengaduan
        </h1>
    </x-hero-gunung>

    <div class="custom-row container justify-content-center p-5">
        <form action="pengaduan/kirim" method="post" id="submitOnce">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="contoh: Mulyono">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan Pengaduan</label>
                <textarea minlength="10" class="form-control" id="message" name="message" required rows="3"></textarea>
            </div>
            <button type="submit" id="btn-submitOnce">
                <a class="more-info-btn">Kirim</a>
            </button>
        </form>
    </div>

</main>
<script src="{{asset('js/submitButtonOnce.js')}}"></script>
@include('layouts.footer')