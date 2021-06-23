@extends('layout/master')

@section('title', 'Detail')

@extends('navlaptop')



@section('container')

<div class="container text-center">
      <img src="{{ url('uploads/laptop') }}/{{ $laptop->logo }}" width="25%" class="rounded-circle" >
      <h1 class="display-4">{{ $laptop->nama }}</h1>
      <p class="lead"></p> 
</div>

<div class="site-section">
<div class="container">
  <div class="jumbotron ">
  <div class="row text-center text-lg-left">
    <div class="col-lg-4 col-md-4 col-xs-6">
      <a href="{{ url('uploads/laptop') }}/{{ $laptop->gam_lep1 }}" class="d-block mb-4 h-100" data-fancybox="">
        <img class="img-fluid img-thumbnail" src="{{ url('uploads/laptop') }}/{{ $laptop->gam_lep1 }}" alt="" width="100%" >
      </a>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-6" >
      <a href="{{ url('uploads/laptop') }}/{{ $laptop->gam_lep2 }}" class="d-block mb-4 h-100" data-fancybox=""> 
        <img class="img-fluid img-thumbnail" src="{{ url('uploads/laptop') }}/{{ $laptop->gam_lep2 }}" alt="" width="100%">
      </a>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-6">
      <a href="{{ url('uploads/laptop') }}/{{ $laptop->gam_lep3 }}" class="d-block mb-4 h-100" data-fancybox="">
        <img class="img-fluid img-thumbnail" src="{{ url('uploads/laptop') }}/{{ $laptop->gam_lep3 }}" alt="" width="100%">
      </a>
    </div>
  </div>
  </div>
  
    <div class="row">
      <div class="col">
        <p>
            <ul class="list-group-item"><img src="{{ url('uploads/icon/iconcpu.png') }}" alt="" height="33px" width="33px">
              <strong class="font-weight-bold">CPU :</strong> {{ $laptop->cpu }}
            </ul>
            <ul class="list-group-item"><img src="{{ url('uploads/icon/iconvga.png') }}" alt="" height="33px" width="33px">
              <strong class="font-weight-bold">GPU :</strong> {{ $laptop->vga }}
            </ul>
            <ul class="list-group-item"><img src="{{ url('uploads/icon/iconos.png') }}" alt="" height="33px" width="33px">
              <strong class="font-weight-bold">Operation System :</strong> {{ $laptop->os }}
            </ul>
            <ul class="list-group-item"><img src="{{ url('uploads/icon/iconlyr.png') }}" alt="" height="33px" width="33px">
              <strong class="font-weight-bold">LAYAR :</strong> {{ $laptop->layar }}
            </ul>
            <ul class="list-group-item list-unstyled">
              <li class="text-center"><img src="{{ url('uploads/icon/port.png') }}" alt="" width="80%"></li>
              <li class="font-weight-bold text-center">I/O PORTS dan KONEKTIVITAS</li>  
              <li><strong class="font-weight-bold">Wifi, LAN dan Bluetooth :</strong> {{ $laptop->port2 }}</li>
              <li><strong class="font-weight-bold">USB Ports :</strong> {{ $laptop->port1 }}</li>
              <li><strong class="font-weight-bold">Port Lainnya :</strong> {{ $laptop->port3 }}</li>
            </ul>
        </p>
      </div>
      <div class="col">
        <p>
            <ul class="list-group-item"><img src="{{ url('uploads/icon/iconsto.png') }}" alt="" height="33px" width="33px">
              <strong class="font-weight-bold">Penyimpanan HDD/SSD :</strong> {{ $laptop->hdd }}
            </ul>
            <ul class="list-group-item"><img src="{{ url('uploads/icon/iconram.png') }}" alt="" height="33px" width="33px">
              <strong class="font-weight-bold">Memory RAM :</strong> {{ $laptop->ram }}
            </ul>
            <ul class="list-group-item"><img src="{{ url('uploads/icon/iconbat.png') }}" alt="" height="33px" width="33px">
              <strong class="font-weight-bold">BATERRY :</strong> {{ $laptop->batre }}
            </ul>
            <ul class="list-group-item"><img src="{{ url('uploads/icon/iconber.png') }}" alt="" height="33px" width="33px">
              <strong class="font-weight-bold">BERAT :</strong> {{ $laptop->berat }}
            </ul>
        </p>
        <li class="list-group-item active"><img src="{{ url('uploads/icon/iconhar.png') }}" alt="" height="33px" width="33px">&nbsp;HARGA : Rp {{ $laptop->harga }}</li>
      </div>
    </div>
    <br>

    <h5 class="display-4 text-center">3DMark Test</h5>
    <br>
    <div class="row">
      <div class="col ">
        <div class="card border-warning mb-3">
          <img src="{{ url('uploads/fireee.png') }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title text-center">Fire Strike</h5>
              <div class="text-center">
                <p class="font-weight-bold">SCORE</p>
                <button type="button" class="btn btn-outline-dark btn-lg btn-block">{{ $laptop->markfire }}</button>
              </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-warning mb-3">
          <img src="{{ URL::asset('uploads/timeee.png') }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title text-center">Time Spy</h5>
              <div class="text-center">
                <p class="font-weight-bold">SCORE</p>
                <button type="button" class="btn btn-outline-dark btn-lg btn-block">{{ $laptop->marktime }}</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <h5 class="display-4 text-center">Game Test</h5>
    <br>
    <div class="progress">
      <div class="progress-bar bg-danger" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">
        <p class="card-text">0 fps - 30 fps Unplayable</p>
      </div>
      <div class="progress-bar bg-warning" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100">
        <p class="card-text">31 fps - 60 fps Playable</p>
      </div>
      <div class="progress-bar bg-success" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">
        <p class="card-text">61 fps - 144+ fps Very Playable</p>
      </div>
    </div>
    <br>
    
    
    <div class="alert alert-info">
  <div class="row text-center text-lg-left">
    <div class="col-lg-3 col-md-5 col-xs-2">
    <div class="card" style="width: 13rem;">
      <img src="{{ url('uploads/fps') }}/{{ $laptop->gam_gem1 }}" class="card-img-top">
      <div class="card-body list-unstyled">
        <p class="card-text text-center ">Recommended Requirement
          <li><strong class="font-weight-bold">OS:</strong> Windows 10 – 64Bit</li>
          <li><strong class="font-weight-bold">CPU:</strong> Intel Core i5-6600K 3.5GHz / AMD Ryzen R5 1600 or higher</li>
          <li><strong class="font-weight-bold">GPU:</strong> AMD Radeon RX 580 4GB or NVIDIA GeForce GTX 1060 3GB or higher</li>
          <li><strong class="font-weight-bold">RAM:</strong> 16 GB</li>
          <li><strong class="font-weight-bold">DirectX:</strong> Version 11</li>
          <li><strong class="font-weight-bold">HDD:</strong> 30 GB</li>
          <li><strong class="font-weight-bold">KONEKSI:</strong> Broadband Internet connection</li>
      </p>
      </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-5 col-xs-2">
      <div class="card" style="width: 13rem;">
        <img src="{{ url('uploads/fps') }}/{{ $laptop->gam_gem2 }}" class="card-img-top">
        <div class="card-body list-unstyled">
          <p class="card-text text-center">Recommended Requirement
              <li><strong class="font-weight-bold">OS:</strong> Windows 10 – 64Bit</li>
              <li><strong class="font-weight-bold">CPU:</strong> Intel i3-4170 @ 3.7Ghz / Intel i5 750 @ 2.67Ghz or higher</li>
              <li><strong class="font-weight-bold">GPU:</strong> NVidia GTX 970 OR NVidia GTX 1060 3GB OR AMD R9 290x OR AMD RX 470 or higher</li>
              <li><strong class="font-weight-bold">RAM:</strong> 12 GB</li>
              <li><strong class="font-weight-bold">DirectX:</strong> Version 12</li>
              <li><strong class="font-weight-bold">HDD:</strong> 70 GB</li>
          </p>
        </div>
      </div>
      </div>

      <div class="col-lg-3 col-md-5 col-xs-6">
        <div class="card" style="width: 13rem;">
          <img src="{{ url('uploads/fps') }}/{{ $laptop->gam_gem3 }}" class="card-img-top">
          <div class="card-body list-unstyled">
            <p class="card-text text-center">Recommended Requirement
              <li><strong class="font-weight-bold">OS:</strong> Windows 10 – 64Bit</li>
              <li><strong class="font-weight-bold">CPU:</strong> Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ (8 CPUs) or higher</li>
              <li><strong class="font-weight-bold">GPU:</strong> NVIDIA GTX 660 2GB / AMD HD7870 2GB or higher</li>
              <li><strong class="font-weight-bold">RAM:</strong> 8 GB</li>
              <li><strong class="font-weight-bold">DirectX:</strong> Version 11</li>
              <li><strong class="font-weight-bold">HDD:</strong> 72 GB</li>
          </p>
          </div>
        </div>
        </div>

        <div class="col-lg-3 col-md-5 col-xs-6">
          <div class="card" style="width: 13rem;">
            <img src="{{ url('uploads/fps') }}/{{ $laptop->gam_gem4 }}" class="card-img-top">
            <div class="card-body list-unstyled">
              <p class="card-text text-center">Recommended Requirement
                <li><strong class="font-weight-bold">OS:</strong> Windows 10 – 64Bit</li>
                <li><strong class="font-weight-bold">CPU:</strong> Core i3-2100 @ 3.1GHz or AMD Phenom II X4 965 @ 3.4 GHz or higher</li>
                <li><strong class="font-weight-bold">GPU:</strong> NVIDIA GeForce GTX 670 or AMD Radeon R9 270X or higher </li>
                <li><strong class="font-weight-bold">RAM:</strong> 8 GB</li>
                <li><strong class="font-weight-bold">DirectX:</strong> Version 12</li>
                <li><strong class="font-weight-bold">HDD:</strong> 35 GB</li>
            </p>
            </div>
          </div>
          </div>
       </div>     
    </div>      
</div>

@endsection