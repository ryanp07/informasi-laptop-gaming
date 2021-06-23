@extends('layout/master')

@section('title', 'Tim E-Sports')

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
      <li><a href="{{ url('/laptop')}}" class="nav-link">Laptop</a></li>
      <li class="active"><a href="{{ url('/tim')}}" class="nav-link">Tim E-Sport</a></li>
    </ul>
  </nav>
</div>
    
@endsection

@section('container')

<div class="owl-carousel-wrapper">
  <div class="box-92819 shadow-lg">
      <div>
        <h1 class=" mb-3 text-center text-black">Tim E-Sports</h1>
        <p>Mengenal secara singkat beberapa tim e-sport terbaik dunia dan media sosial mereka.</p>
      </div>
  </div>
    <div class="ftco-cover-1" style="background-image: url('uploads/tim/gdt2.png');"></div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5 section-2-title">
        <div class="col-md-6">
          <p>Berbagai game online baru hadir, tak hanya dengan judul berbeda tapi juga genre yang berbagai macam.</p>
          <p>Seperti halnya kompetisi-kompetisi olahraga, game online juga sering dipertandingkan dalam sebuah turnamen. 
            Oleh karena itu, hadir berbagai tim e-Sports yang bukan hanya sekadar tim biasa, tapi sudah seperti klub.</p>
            <p>berikut beberapa daftar tim terkenal:</p>
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
          <div class="jumbotron bg-white">
            <h2>{{ $tm->nama }}</h2>
            <p>{{ $tm->ket }}</p>
            <div>
            <table class="table  table-bordered">
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

    <div class="row justify-content-center text-center">
      <div class="col-md-7">
        <div class="slide-one-item owl-carousel">
          <blockquote class="testimonial-1">
            <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
            <p>Memiliki skill hebat dalam game memang penting, tapi kerjasama tim juga jauh lebih penting</p>
            <cite><span class="text-black">iNSaNiA</span> &mdash; <span class="text-muted">Team Captain Liquid</span></cite>
          </blockquote>

          <blockquote class="testimonial-1">
            <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
            <p>Peringkat hanyalah peringkat. Peringkat bisa didapat dengan cara yang instan. Tapi skill, hanya bisa didapat dari kerja keras</p>
            <cite><span class="text-black">Jabz</span> &mdash; <span class="text-muted">Team Captain Fnatic</span></cite>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection