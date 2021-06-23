@extends('layout/master')

@section('title', 'GTA V')

@extends('navlaptop')


@section('container')

<div class="owl-carousel-wrapper">

      

    <div class="box-92819 shadow-lg">
      

        <div>
          <h1 class=" mb-3 text-black text-center">GTA V</h1>
            <p>Grand Theft Auto V adalah permainan aksi-petualangan 2013 yang dikembangkan oleh Rockstar North dan diterbitkan oleh Rockstar Games. Ini adalah entri utama pertama dalam seri Grand 
              Theft Auto sejak 2008 Grand Theft Auto IV. Berada di dalam negara fiksi San Andreas, yang berbasis di California Selatan, kisah pemain tunggal mengikuti tiga kriminal dan upaya 
              mereka untuk melakukan pencurian sementara di bawah tekanan dari agen pemerintah dan tokoh-tokoh kejahatan yang kuat. Desain dunia terbuka memungkinkan pemain bebas berkeliaran 
              di pedesaan terbuka San Andreas dan kota fiksi Los Santos, yang berbasis di Los Angeles.</p>
        </div>
      
    </div>

      <div class="ftco-cover-1" style="background-image: url('uploads/gd4.jpg');"></div>
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
          <a href="{{url('/gtav')}}" class="btn btn-outline-danger btn-md ml-1 mb-3 active">GTA V</a>
          <a href="{{url('/pubg')}}" class="btn btn-outline-danger btn-md ml-1 mb-3">PUBG</a>
        </div>
      </div>

      <div class="row">
        <div class="col ">
          <div class="card border-warning mb-3">
            <img src="{{ url('uploads/fire.png') }}" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Fire Strike</h5>
              <p class="card-text">3DMark Fire Strike adalah tolak ukur DirectX 11 untuk PC gaming modern. Grafik real-time yang ambisius 
                ditampilkan dengan detail dan kompleksitas yang jauh melampaui benchmark dan game DirectX 11 lainnya.
                <br> <br>
                Fire Strike mencakup dua tes grafis, tes fisik dan tes gabungan yang menekankan CPU dan GPU.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning mb-3">
            <img src="{{ url('uploads/time.png') }}" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Time Spy</h5>
              <p class="card-text">3DMark Time Spy adalah tes benchmark DirectX 12 untuk PC gaming Windows 10. Time Spy adalah salah satu aplikasi DirectX 12 
                pertama yang dibangun dengan cara yang benar dari bawah ke atas untuk sepenuhnya menyadari keuntungan kinerja yang ditawarkan API baru.
                <br> <br>
                Dengan engine DirectX 12 murni, yang mendukung fitur API baru seperti komputasi asinkron, multi-adaptor eksplisit,
                dan multi-threading, Time Spy adalah tes yang ideal untuk menentukan tolok ukur kartu grafis terbaru.
              </p>
            </div>
          </div>
        </div>
      </div>

      <h4 class=" mb-3 text-black">Recommended Laptop Untuk Game Ini</h4>
      <table class="table table-hover">
        <thead class="thead-dark text-center">
          <tr>
            <th scope="col">Rank</th>
            <th scope="col">Laptop</th>
            <th scope="col">Spesifikasi Singkat dan 3DMark</th>
            <th scope="col">FPS Game</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($laptop as $lp)
                
            
          <tr>
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td class="text-center">
                <img src="{{ url('uploads')}}/{{ $lp->gambar}} " class="card-img"
                alt="" height="auto">
                <br> <br>
                <h4>{{ $lp->nama }}</h4>
            </td>
            <td>
                  <strong class="font-weight-bold">CPU :</strong> {{ $lp->cpu }} 
                  <br>
                  <strong class="font-weight-bold">GPU :</strong> {{ $lp->vga }}
                  <br>
                  <strong class="font-weight-bold">RAM :</strong> {{ $lp->ram }}
                  <br>
                  <strong class="font-weight-bold">HDD :</strong> {{ $lp->hdd }}
                  <br><br>   
                  <strong class="font-weight-bold">3DMark FireStrike :</strong> {{ $lp->markfire }}
                  <br>
                  <strong class="font-weight-bold">3DMark TimeSpy :</strong> {{ $lp->marktime }}
            </td>
            <td>
                <img src="{{ url('uploads/fps')}}/{{ $lp->gam_gem3}} " class="card-img"
                alt="" height="auto">
            </td>
            <td><a href="/laptop/{{ $lp->id }}" class="btn btn-link">More</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
      
      {{-- <div class="row">
        @foreach( $laptop as $mi ) 
        <div class="col-lg-6">
          <div class="media-02819">
            <a href="/laptop/{{$mi->id}}" class="img-link"><img src="{{ url('uploads') }}/{{ $mi->gambar }}" alt="Image" class="img-fluid"></a>
            <h3>{{ $mi->nama }}</h3>
            <span>Rp {{ $mi->harga }}</span>
          </div>
        </div>
        @endforeach
      </div> --}}

    </div>
  </div>
  
  
@endsection