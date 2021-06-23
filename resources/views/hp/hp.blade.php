@extends('layout/master')

@section('title', 'HP')

@extends('navlaptop')


@section('container')

<div class="owl-carousel-wrapper">

      

    <div class="box-92819 shadow-lg">
      

        <div>
          <h1 class=" mb-3 text-black">HP</h1>
          <p>Hewlett-Packard Company dikenal umum sebagai HP adalah salah satu perusahaan teknologi informasi terbesar dunia. Dibangun oleh dua orang yang bernama Bill Hewlett dan Dave Packard. 
            Bermarkas besar di Palo Alto, California, Amerika Serikat, perusahaan ini memiliki keberadaan global dalam bidang komputasi, percetakan, dan gambaran digital, dan juga menjual perangkat lunak dan pelayanan jasa lainnya.</p>
        </div>
      
    </div>

      <div class="ftco-cover-1" style="background-image: url('uploads/logoall.jpg');"></div>
  </div>

  
  <div class="site-section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md">
          <h2 class="heading-39291 mb-0">Let's Choice</h2>
          <br>
            <a href="{{url('/laptop')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">ALL</a>
            <a href="{{url('/acer')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">ACER</a></span>
            <a href="{{url('/asus')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">ASUS</a>
            <a href="{{url('/gigabyte')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">GIGABYTE</a>
            <a href="{{url('/hp')}}" class="btn btn-outline-primary btn-md ml-1 mb-3 active">HP</a>
            <a href="{{url('/legion')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">LENOVO</a></<a>
            <a href="{{url('/msi')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">MSI</a>
        </div>
      </div>

      <div class="row mb-5 align-items-center">
        <div class="col-md">
          <h2 class="heading-39291 mb-0">Let's Choice Your Game</h2>
          <br>
            <a href="{{url('/fifa19')}}" class="btn btn-outline-danger btn-md ml-1 mb-3">FIFA 19</a>
            <a href="{{url('/forza')}}" class="btn btn-outline-danger btn-md ml-1 mb-3">FORZA HOROZON 4</a>
            <a href="{{url('/gtav')}}" class="btn btn-outline-danger btn-md ml-1 mb-3">GTA V</a>
            <a href="{{url('/pubg')}}" class="btn btn-outline-danger btn-md ml-1 mb-3">PUBG</a>
        </div>
      </div>
      
      <div class="row">
        @foreach( $laptop as $h ) 
        <div class="col-lg-6">
          <div class="media-02819">
            <a href="/laptop/{{$h->id}}" class="img-link"><img src="{{ url('uploads') }}/{{ $h->gambar }}" alt="Image" class="img-fluid"></a>
            <h3>{{ $h->nama }}</h3>
            <span>Rp {{ $h->harga }}</span>
          </div>
        </div>
        @endforeach
       

      </div>
    </div>
  </div>
  
  
@endsection