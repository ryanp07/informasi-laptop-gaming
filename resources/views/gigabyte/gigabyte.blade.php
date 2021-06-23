@extends('layout/master')

@section('title', 'Gigabyte')

@extends('navlaptop')


@section('container')

<div class="owl-carousel-wrapper">

      

    <div class="box-92819 shadow-lg">
      

        <div>
          <h1 class=" mb-3 text-black">GIGABYTE</h1>
          <p>Produsen dari produk produk perangkat keras komputer terkenal Taiwan, Perusahaan ini telah menawarkan lini produk yang komprehensif yang mencakup Motherboard, kartu grafis, komponen PC, PC periferal, laptop, Slate device, Desktop PC, komunikasi jaringan, server dan ponsel untuk menjaga keseimbangan dalam dunia yang cepat berubah.</p>
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
            <a href="{{url('/gigabyte')}}" class="btn btn-outline-primary btn-md ml-1 mb-3 active">GIGABYTE</a>
            <a href="{{url('/hp')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">HP</a>
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
        @foreach( $laptop as $gb ) 
        <div class="col-lg-6">
          <div class="media-02819">
            <a href="/laptop/{{$gb->id}}" class="img-link"><img src="{{ url('uploads') }}/{{ $gb->gambar }}" alt="Image" class="img-fluid"></a>
            <h3>{{ $gb->nama }}</h3>
            <span>Rp {{ $gb->harga }}</span>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  
  
@endsection