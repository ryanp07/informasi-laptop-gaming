@section('warnaaktif')
<div class="col-lg-4">
    <nav class="site-navigation text-right ml-auto " role="navigation">
      <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
        <li><a href="{{ url('/')}}" class="nav-link">Beranda</a></li>
        <li><a href="{{ url('/sejarah')}}" class="nav-link">Sejarah</a></li>
        
      </ul>
    </nav>
  </div>
  <div class="col-lg-4 text-center">
    <div class="site-logo">
      <a href="">LEPYKU</a>
    </div>
    <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
  </div>
  <div class="col-lg-4">
    <nav class="site-navigation text-left mr-auto " role="navigation">
      <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
        <li class="active"><a href="{{ url('/laptop')}}" class="nav-link">Laptop</a></li>
        <li><a href="{{ url('/tim')}}" class="nav-link">Tim E-Sport</a></li>
        
        {{-- <li><a href="{{ url('/gallery')}}" class="nav-link">Gallery</a></li> --}}
        {{-- <li><a href="{{ url('/tentang')}}" class="nav-link">Tentang</a></li> --}}
      </ul>
    </nav>
  </div>
  @endsection
