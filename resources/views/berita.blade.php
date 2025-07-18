@include('layouts.header')

<main class="main container pt-4 d-flex flex-column flex-lg-row">
<section class="mt-5 pb-0 custom-berita">
<div class="w-75 mx-auto">
<h1 class="text-left fs-4 fw-medium text-black">
{{$news['getNewsById']->title}}
</h1>
<div class="mt-4">
<div class="d-flex flex-column text-end justify-content-between flex-sm-row">
<blockquote>{{$news['formattedTime']}}</blockquote>
<blockquote>Ditulis Oleh: {{$news['getNewsById']->writer}}</blockquote>
</div>
<img class="w-100 rounded-2" src="{{asset('storage/'.$news['getNewsById']->photo_path)}}" alt="dawet-jabung" />
</div>
<div class="d-flex flex-column mt-4 text-bold fw-bold">
{!! $news['getNewsById']->content !!}
</div>
</div>
</section>

<section class="pt-0 mt-3 container custom-sidebar">
<h1 class="text-center fs-2 fw-medium text-black">Berita Lain</h1>
<div class="content">
<div class="card-grid d-flex flex-column gap-3">
@if (empty($news['newsExceptOne']))
<div class="card custom-card">
<h1 class="fs-3 fw-bold text-white text-center">Tidak Ada Berita</h1>
</div>
@else
@foreach ($news['newsExceptOne'] as $item)
<div class="card mx-auto">
<img class="mx-auto w-100" src="{{asset('storage/'.$item->photo_path)}}" alt="Dawet Jabung" />
<h2 class="mt-3 text-white fs-4 fw-normal">{{$item->title}}</h2>
<a href="{{route('berita.show', ['id' => $item->id])}}" class="button">Selengkapnya ></a>
</div>
@endforeach
@endif

</div>
</div>
</section>
</main>

@include('layouts.footer')
