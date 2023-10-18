<!doctype html>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="{{$aplikasi->singkatan}}" />
	<meta name="description" content="{{$aplikasi->singkatan.' '.$aplikasi->daerah}} - @yield('title')" />
	<link rel="canonical" href="{{url()->full()}}" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:description" content="{{$aplikasi->singkatan.' '.$aplikasi->daerah}} - @yield('title')" />
	<meta property="og:url" content="{{url()->full()}}" />
	<meta property="og:site_name" content="{{$aplikasi->singkatan.' '.$aplikasi->daerah}} - @yield('title')" />
	<meta property="article:modified_time" content="{{date('Y-m-d H:i:s')}}" />
	<meta property="og:image" content="@yield('img')" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="3 minutes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

	<!-- Flaticon Font -->
    <link href="{{ URL::asset('frontend/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ URL::asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('frontend/css/style.css') }}" rel="stylesheet" />
	
@if($aplikasi->file_favicon)
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($aplikasi->file_favicon->url_stream)??'' }}">
	<title>@yield('title') | {{$aplikasi->singkatan.' '.$aplikasi->daerah}}</title>
@endif
@stack('css')
</head>
<body>
		@include('layouts.frontend.header')
		@yield('content')
		@include('layouts.frontend.footer')

	<!-- <div class="copyright-text text-center">
        <p>© {{$aplikasi->singkatan.' '.$aplikasi->daerah}}. <a href="https://diskominfotik.bengkaliskab.go.id/" target="_blank">Tim IT Diskominfotik</a></p>
    </div> -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ URL::asset('frontend/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ URL::asset('frontend/js/main.js') }}"></script>

	@stack('js')
	

</body>
</html>