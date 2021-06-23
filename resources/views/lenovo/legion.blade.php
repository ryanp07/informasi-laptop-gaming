@extends('layout/master')

@section('title', 'Lenovo')

@extends('navlaptop')


@section('container')

<div class="owl-carousel-wrapper">

      

    <div class="box-92819 shadow-lg">
      

        <div>
          <h1 class=" mb-3 text-black">LENOVO</h1>
          <p>Sebelumnya dikenal dengan nama Legend Group, adalah produsen PC terbesar di Republik Rakyat Tiongkok. Pada 2004, Lenovo adalah produsen PC terbesar kedelapan di dunia.
            Lenovo juga menjual server, komputer genggam, perangkat pencitraan, dan telepon genggam. Selain itu, Lenovo juga menyediakan integrasi teknologi informasi dan jasa dukungan kepadanya. Unit QDI-nya menawarkan produksi secara kontrak. </p>
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
            <a href="{{url('/hp')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">HP</a>
            <a href="{{url('/legion')}}" class="btn btn-outline-primary btn-md ml-1 mb-3 active">LENOVO</a></<a>
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
        @foreach( $laptop as $lg ) 
        <div class="col-lg-6">
          <div class="media-02819">
            <a href="/laptop/{{$lg->id}}" class="img-link"><img src="{{ url('uploads') }}/{{ $lg->gambar }}" alt="Image" class="img-fluid"></a>
            <h3>{{ $lg->nama }}</h3>
            <span>Rp {{ $lg->harga }}</span>
          </div>
        </div>
        @endforeach
        {{-- <div class="col-lg-6">
          <div class="media-02819">
            <a href="#" class="img-link"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <h3><a href="#">Creative Modern House</a></h3>
            <span>New York City, USA</span>
          </div>
        </div> --}}

      </div>
    </div>
  </div>
  
  
@endsection