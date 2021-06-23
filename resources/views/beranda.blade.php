@extends('layout/master')

@section('title', 'Home')

@section('warnaaktif')

<div class="col-lg-4">
  <nav class="site-navigation text-right ml-auto " role="navigation">
    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
      <li class="active"><a href="{{ url('/')}}" class="nav-link">Beranda</a></li>
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
      <li><a href="{{ url('/laptop')}}" class="nav-link">Laptop</a></li>
      <li><a href="{{ url('/tim')}}" class="nav-link">Tim E-Sport</a></li>
      
      {{-- <li><a href="{{ url('/gallery')}}" class="nav-link">Gallery</a></li> --}}
      {{-- <li><a href="{{ url('/tentang')}}" class="nav-link">Tentang</a></li> --}}
    </ul>
  </nav>
</div>
    
@endsection


@section('container')

<div class="owl-carousel-wrapper">

  <div class="box-92819 shadow-lg">
      <div>
        <h1 class=" mb-3 text-center text-black">Selamat Datang, gamers!</h1>
        <p>Semoga informasi yang saya berikan bisa menjadi referensi kalian, salam gamers.</p>
      </div>  
  </div>

  <div class="owl-carousel owl-1 ">
    <div class="ftco-cover-1" style="background-image: url('uploads/beranda/gdb.jpg');"></div>
    <div class="ftco-cover-1" style="background-image: url('uploads/beranda/gdb1.jpg');"></div>
  </div>

</div>  

<div class="site-section bg-primary">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-md-7">
        <h2 class="heading-39291 text-white mb-3">Apa yang ada di Web ini ?</h2>
        <p></p>
      </div>
    </div>
    
    <div class="row">
      
      <div class="col-md-4 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-29193 text-center">
          <span class="img-wrap mb-5">
            <img src="uploads/beranda/isej.png" alt="Image" class="img-fluid">
          </span>
          <h3 class="mb-4">Sejarah</h3>
          <p>Mengetahui sejarah dari pc gaming dan kemunculan 2 vga ternama.</p>
        </div>

      </div>
      <div class="col-md-4 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-29193 text-center">
          <span class="img-wrap mb-5">
            <img src="uploads/beranda/ilap1.png" alt="Image" class="img-fluid">
          </span>
          <h3 class="mb-4">Laptop</h3>
          <p>Kumpulan beberapa laptop gaming dari berbagai brand terkenal.</p>
        </div>

      </div>
      <div class="col-md-4 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-29193 text-center">
          <span class="img-wrap mb-5">
            <img src="uploads/beranda/itim.png" alt="Image" class="img-fluid">
          </span>
          <h3 class="mb-4">Tim E-Sport</h3>
          <p>Mengenal secara singkat beberapa tim e-sport terbaik dunia.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-md-7">
        <h2 class="heading-39291 mb-0">Contoh Laptop</h2>
      </div>
      <div class="col-md-5 text-right">
        <p class="mb-0"><a href="/laptop" class="more-39291">Lihat semua Laptop</a></p>
      </div>
    </div>

      <div class="row">
        @foreach( $laptop as $lp ) 
        <div class="col-lg-6">
          <div class="media-02819">
            <a href="/laptop/{{ $lp->id }}" class="img-link"><img src="{{ url('uploads') }}/{{ $lp->gambar }}" alt="Image" class="img-fluid"></a>
            <h3>{{ $lp->nama }}</h3>
            <span>Rp {{ $lp->harga }}</span>
          </div>
        </div>
        @endforeach
      </div>
  </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-md-7">
        <h2 class="heading-39291 mb-0">Contoh Tim E-Sport</h2>
      </div>
      <div class="col-md-5 text-right">
        <p class="mb-0"><a href="/tim" class="more-39291">Lihat semua Tim E-Sport</a></p>
      </div>
    </div>

        <div class="row align-items-stretch">
              
          @foreach ( $tim as $tm )
          <div class="col">
            <div data-aos="fade-up" data-aos-delay="100">
            <div class="post-entry-1 h-100 bg-white text-center">
              <div class="d-inline-block">
                <img src="{{ url('uploads/tim') }}/{{ $tm->gambar }}" alt="Image" width="70%"
                  class="img-fluid">
              </div>
            </div>
            <div class="panel-body">
              <div class="jumbotron bg-white">
                <h2>{{ $tm->nama }}</h2>
                <p>{{ $tm->ket }}</p>
                <div>
                <table class="table table-bordered">
                  <thead class="table-info">
                    <th scope="col">Prestasi Tournament Terakhir</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Tournament</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Hadiah</th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">DOTA 2</th>
                      <td>{{ $tm->tgldota }}</td>
                      <td>{{ $tm->tourdota }}</td>
                      <td>{{ $tm->posdota }}</td>
                      <td>{{ $tm->haddota }}</td>
                    </tr> 
                      <tbody>
                        <tr>
                          <th scope="row">COUNTER-STRIKE</th>
                          <td>{{ $tm->tglcs }}</td>
                          <td>{{ $tm->tourcs }}</td>
                          <td>{{ $tm->poscs }}</td>
                          <td>{{ $tm->hadcs }}</td>
                        </tr>
                </table>
              </div>
              <div class="text-center">
                <a href="{{ $tm->fb }}" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                <a href="{{ $tm->twt }}" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="{{ $tm->ig }}" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="{{ $tm->yt }}" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
              </div>
            </div>
          </div>
            
          </div>
          @endforeach
        </div>

  </div>
</div>


<div class="site-section section-4">
  <div class="container">

    <div class="row justify-content-center text-center bg-light">
      <div class="col-md-7">
        <div class="slide-one-item owl-carousel">
          <blockquote class="testimonial-1">
            <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
            <p>Dengan memainkan sebuah permainan, kita dapat banyak belajar arti sebuah kegagalan dan mengatur strategi untuk meraih kemenangan. 
              Sama dengan halnya kehidupan, kita harus berjuang tanpa menyerah untuk capai puncak kesuksesan.</p>
            <cite><span class="text-muted">Unknown</span></cite>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection
