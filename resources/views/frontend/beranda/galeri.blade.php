@extends('layouts.frontend.main')
@section('title', 'Galeri '.$jenis)
@section('img', asset($aplikasi->file_logo->url_stream))
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div
    class="d-flex flex-column align-items-center justify-content-center"
    style="min-height: 300px"
    >
    <h3 class="display-3 font-weight-bold text-white">Galeri</h3>
    <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="{{url('/')}}">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Galeri</p>
    </div>
    </div>
</div>
<!-- Header End -->
<!-- Gallery Start -->
<div class="container-fluid pt-5" style="padding-bottom:12rem">
    <div class="container">
        <div class="row portfolio-container">
        @foreach($data as $foto)
        <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{$foto->file->url_stream}}" alt="" />
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                <a href="{{$foto->file->url_stream}}" data-lightbox="portfolio">
                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
            </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
    <!-- Gallery End -->
@endsection