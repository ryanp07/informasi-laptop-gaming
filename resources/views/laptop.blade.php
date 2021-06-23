@extends('layout/master')

@section('title', 'Laptop')

@extends('navlaptop')


@section('container')

<div class="owl-carousel-wrapper">
    <div class="box-92819 shadow-lg">
        <div>
          <h1 class="mb-3 text-center text-black ">Laptop</h1>
          <p>Kumpulan beberapa laptop gaming dari berbagai brand terkenal.</p>
        </div>
    </div>
    <div class="owl-carousel owl-1 ">
      <div class="ftco-cover-1" style="background-image: url('uploads/brand/gdb1.jpg');"></div>
      <div class="ftco-cover-1" style="background-image: url('uploads/brand/gdb2.jpg');"></div>
      <div class="ftco-cover-1" style="background-image: url('uploads/brand/gdb3.jpg');"></div>
      <div class="ftco-cover-1" style="background-image: url('uploads/brand/gdb4.jpg');"></div>
    </div>
</div>

  
  <div class="site-section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md">
          <h2 class="heading-39291 mb-0">Let's Choice</h2>
          <br>
            <a href="{{url('/laptop')}}" class="btn btn-outline-primary btn-md ml-1 mb-3 active">ALL</a>
            <a href="{{url('/acer')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">ACER</a></span>
            <a href="{{url('/asus')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">ASUS</a>
            <a href="{{url('/gigabyte')}}" class="btn btn-outline-primary btn-md ml-1 mb-3">GIGABYTE</a>
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
        

      <form class="form-inline" method="GET" action="/laptop">
        <input name="cari" class="form-control mr-sm-2" placeholder="Search" autocomplete="off">
        <button class="btn btn-primary icon-search" type="submit"></button>
      </form>
      
      
      <br>
      <br>
        
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
        {{ $laptop->links() }}
      </div>

    </div>
  </div>
  
  
@endsection