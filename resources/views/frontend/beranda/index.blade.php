@extends('layouts.frontend.main')
@section('title', 'Beranda')
@section('img', ($aplikasi->file_logo?(asset($aplikasi->file_logo->url_stream)):''))
@section('content')
    <!-- Header Start -->
    <div class="container-fluid py-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      @foreach($slider as $key => $slide)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" @if($key==0) class="active" @endif></li>
      @endforeach
      </ol>
      <div class="carousel-inner">
        @foreach($slider as $key => $slide)
        <div class="carousel-item @if($key==0) active @endif">
          <img src="{{asset($slide->file->url_stream)}}" class="d-block w-100" alt="{{$slide->nama}}">
        </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-5 mb-lg-0"
              src="{{ asset('frontend/img/dwp.jpg') }}"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <p class="section-title pr-5">
              <span class="pr-2">Sekilas Tentang</span>
            </p>
            <h1 class="mb-4">Dharma Wanita Persatuan</h1>
            <h5 class="mb-4">Dinas Kesehatan Kabupaten Bengkalis</h5>
            <p>
              Dharma Wanita Persatuan (DWP) Dinas Kesehatan Kabupaten Bengkalis adalah sebuah organisasi sosial yang terletak di kabupaten Bengkalis, Indonesia. DWP Dinas Kesehatan ini adalah bagian dari Dharma Wanita Persatuan, sebuah organisasi nasional yang didirikan untuk mendukung program-program pemerintah dan memajukan kesejahteraan masyarakat. Organisasi ini memiliki fokus khusus pada bidang kesehatan di wilayah tersebut. <br/>
              Dalam menjalankan misinya, DWP Dinas Kesehatan Kabupaten Bengkalis berkomitmen untuk meningkatkan kesadaran masyarakat tentang kesehatan dan kesejahteraan. Mereka menyelenggarakan berbagai kegiatan sosial, pendidikan, dan kesehatan untuk membantu masyarakat memahami pentingnya gaya hidup sehat, pencegahan penyakit, dan akses layanan kesehatan yang baik.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Artikel Terbaru</span>
          </p>
          <h1 class="mb-4">Artikel Dharma Wanita Persatuan</h1>
        </div>
        <div class="row pb-3">
          @foreach($berita as $item)
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="{{ $item->file->url_stream }}" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">{{$item->nama}}</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-calendar text-primary"></i> {{$item->tanggal}}</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-eye text-primary"></i> {{$item->view??0}}</small
                  >
                </div>
                <p>
                  {{Help::shortDescription($item->isi,30)}}
                </p>
                <a href="#" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
    <!-- Blog End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
      <div class="container"  style="padding-bottom:12rem">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Foto Terbaru</span>
          </p>
          <h1 class="mb-4">Galeri Dharma Wanita Persatuan</h1>
        </div>
        <div class="row portfolio-container">
        @foreach($galeri as $foto)
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item ">
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
          <!-- Gallery End -->
      </div>
    </div>
    <!-- Blog End -->
@endsection
@push('css')
<style>
  .carousel-item {
    position: relative;
    padding-bottom: 46.25%; /* 16:9 ratio */
    height: 0;
    overflow: hidden;
  }
  .carousel-item img {
    position:absolute;
    left:0;
    top:0;
    min-width:100%;
    min-height:100%;
    width:auto;
    height:auto;
  }
</style>
@endpush