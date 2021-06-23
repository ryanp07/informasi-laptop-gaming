@extends('layout.master')

@section('title', 'Tentang')

@section('warnaaktif')

<div class="col-lg-4">
  <nav class="site-navigation text-right ml-auto " role="navigation">
    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
      <li><a href="{{ url('/')}}" class="nav-link">Beranda</a></li>
      <li><a href="{{ url('/sejarah')}}" class="nav-link">Sejarah</a></li>
      <li><a href="{{ url('/brand')}}" class="nav-link">Brand</a></li>
    </ul>
  </nav>
</div>
<div class="col-lg-4 text-center">
  <div class="site-logo">
    <a href="">LAPTOP CENTER</a>
  </div>
  <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
</div>
<div class="col-lg-4">
  <nav class="site-navigation text-left mr-auto " role="navigation">
    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
      <li><a href="{{ url('/tim')}}" class="nav-link">Tim E-Sport</a></li>
      {{-- <li><a href="{{ url('/gallery')}}" class="nav-link">Gallery</a></li> --}}
      <li class="active"><a href="{{ url('/tentang')}}" class="nav-link">Tentang</a></li>
    </ul>
  </nav>
</div>
    
@endsection

@section('container')



<div class="owl-carousel-wrapper">

      

  <div class="box-92819 shadow-lg">
    

      <div>
        <h1 class=" mb-3 text-center text-black">Tentang</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quam, ratione earum.</p>
      </div>
    
  </div>

    <div class="ftco-cover-1" style="background-image: url('images/hero_1.jpg');"></div>
</div>


<div class="site-section">
  <div class="container">
    
    <div class="row">
      
      <div class="col-lg-8 mb-5" >
        <blockquote class="testimonial-1" data-aos="fade-up" data-aos-delay="100">
          <div style="text-align: center;">
          <img src="uploads/mypict.jpg" alt="Image" class="rounded-circle">
          </div>
          <br>
          <p>Hai semua saya Ryan dari salah satu Universitas ternama di Indonesia. 
            Dengan adanya website ini saya berharap kepada teman-teman sekalian bisa mengerti 
            sedikit tentang dunia laptop gaming, sejarah dan tim e-sports yang ada didunia.</p>
          <cite><span class="text-black">Ryan Pasha</span> &mdash; <span class="text-muted">Creator</span></cite>
        </blockquote>
      </div>
      <div class="col-lg-4 ml-auto">
        <div class="bg-white p-3 p-md-5">
          <h3 class="heading-39291">Contact Info</h3>
          <ul class="list-unstyled footer-link">
            <li class="d-block mb-3">
              <span class="d-block text-black small text-uppercase font-weight-bold">Address:</span>
              <span>Taman Alamanda Blok E6 no 42, Tambun Utara, Bekasi</span></li>
            <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Phone:</span><span>+62 822-1097-8808</span></li>
            <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Email:</span><span>ryanpasha22@gmail.com</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>  


@endsection