<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <i class="flaticon-043-teddy-bear"></i>
          <span class="text-primary">{{$aplikasi->nama}}</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
		  	@foreach($menu as $key => $val)
				<a href="{{is_string($val) ? $val : '#'}}" class="nav-item nav-link">{{$key}}</a>
				@if(!is_string($val))
				<div class="nav-item dropdown">
					@foreach($val as $keydata => $data)
						@include('layouts.frontend.menu',['data'=>$data])
					@endforeach
				</div>
				@endif
			@endforeach
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->