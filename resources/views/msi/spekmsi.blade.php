@extends('layout/masterspek')

@section('title', 'Detail')

@extends('navbrand')



@section('container')

<div class="container text-center">
  
      <img src="{{ url('uploads/laptop') }}/{{ $msi->logo }}" width="25%" class="rounded-circle" >
      <h1 class="display-4">{{ $msi->nama }}</h1>
      <p class="lead"></p> 
      
</div>

<div class="site-section">
  <div class="container">
    <div class="jumbotron">
    <div class="row text-center text-lg-left">
      <div class="col-lg-4 col-md-5 col-xs-6">
        <a href="{{ url('uploads/laptop') }}/{{ $msi->gam_lep1 }}" class="d-block mb-4 h-100" data-fancybox="">
          <img class="img-fluid img-thumbnail" src="{{ url('uploads/laptop') }}/{{ $msi->gam_lep1 }}" width="100%" >
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-xs-6" >
        <a href="{{ url('uploads/laptop') }}/{{ $msi->gam_lep2 }}" class="d-block mb-4 h-100" data-fancybox=""> 
          <img class="img-fluid img-thumbnail" src="{{ url('uploads/laptop') }}/{{ $msi->gam_lep2 }}" alt="image" width="100%">
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-xs-6">
        <a href="{{ url('uploads/laptop') }}/{{ $msi->gam_lep3 }}" class="d-block mb-4 h-100" data-fancybox="">
          <img class="img-fluid img-thumbnail" src="{{ url('uploads/laptop') }}/{{ $msi->gam_lep3 }}" alt="image" width="100%">
        </a>
      </div>
    </div>
    </div>






    <div class="row">
      <div class="col">
        <p>
          <li class="list-group-item"><img src="{{ url('uploads/icon/iconcpu.png') }}" alt="" height="33px" width="33px">&nbsp;CPU : {{ $msi->cpu }}</li>
          <li class="list-group-item"><img src="{{ url('uploads/icon/iconvga.png') }}" alt="" height="33px" width="33px">&nbsp;VGA : {{ $msi->vga }}</li>
          <li class="list-group-item"><img src="{{ url('uploads/icon/iconos.png') }}" alt="" height="33px" width="33px">&nbsp;OS : {{ $msi->os }}</li>
          <li class="list-group-item"><img src="{{ url('uploads/icon/iconlyr.png') }}" alt="" height="33px" width="33px">&nbsp;LAYAR : {{ $msi->layar }}</li>
      </p>
    </div>
    <div class="col">
      <p>
          <li class="list-group-item"><img src="{{ url('uploads/icon/iconsto.png') }}" alt="" height="33px" width="33px">&nbsp;HDD/SSD : {{ $msi->hdd }}</li>
          <li class="list-group-item"><img src="{{ url('uploads/icon/iconram.png') }}" alt="" height="33px" width="33px">&nbsp;RAM : {{ $msi->ram }}</li>
          <li class="list-group-item"><img src="{{ url('uploads/icon/iconbat.png') }}" alt="" height="33px" width="33px">&nbsp;BATTERY : {{ $msi->batre }}</li>
          <li class="list-group-item"><img src="{{ url('uploads/icon/iconber.png') }}" alt="" height="33px" width="33px">&nbsp;BERAT : {{ $msi->berat }}</li>
      </p>
      <li class="list-group-item active"><img src="{{ url('uploads/icon/iconhar.png') }}" alt="" height="33px" width="33px">&nbsp;HARGA : Rp {{ $msi->harga }}</li>
      </div>
    </div>

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

    <h5 class="display-4 text-center">Game Test</h5>

    <div class="jumbotron">
  <div class="row text-center text-lg-left">
    
    <div class="col-lg-3 col-md-5 col-xs-2">
      <div class="card" style="width: 13rem;">
        <img src="{{ url('uploads/fps') }}/{{ $msi->gam_gem1 }}" class="card-img-top">
        <div class="card-body">
          <p class="card-text text-center"> Requirement
            
            <li>OS: Windows 10 ??? 64Bit</li>
            <li>CPU: AMD Ryzen 5-1600 / Intel Core i5-7600K</li>
            <li>GPU: AMD Radeon RX 580 4GB / Nvidia GTX 1060 6GB or better</li>
            <li>RAM: 16 GB</li>
            <li>DirectX: Version 11</li>
            <li>HDD: 30 GB</li>
            <li>KONEKSI: Broadband Internet connection</li>
          
        </p>
        </div>
      </div>
      </div>
    
        <div class="col-lg-3 col-md-5 col-xs-2">
          <div class="card" style="width: 13rem;">
            <img src="{{ url('uploads/fps') }}/{{ $msi->gam_gem2 }}" class="card-img-top">
            <div class="card-body">
              <p class="card-text text-center"> Requirement
                
                  <li>OS: Windows 10 ??? 64Bit</li>
                  <li>CPU: Intel i3-4170 @ 3.7Ghz / Intel i5 750 @ 2.67Ghz</li>
                  <li>GPU: NVIDIA GeForce GTX 650Ti / AMD Radeon R7-250X (2GB VRAM with Shader Model 5.0)</li>
                  <li>RAM: 8 GB</li>
                  <li>DirectX: Version 11</li>
                  <li>HDD: 70 GB</li>
                
              </p>
            </div>
          </div>
          </div>
    
          <div class="col-lg-3 col-md-5 col-xs-6">
            <div class="card" style="width: 13rem;">
              <img src="{{ url('uploads/fps') }}/{{ $msi->gam_gem3 }}" class="card-img-top">
              <div class="card-body">
                <p class="card-text text-center"> Requirement
                
                  <li>OS: Windows 10 ??? 64Bit</li>
                  <li>CPU: Intel Core i5 3470 @ 3.2GHZ (4 CPUs) / AMD X8 FX-8350 @ 4GHZ (8 CPUs)</li>
                  <li>GPU: NVIDIA GTX 660 2GB / AMD HD7870 2GB</li>
                  <li>RAM: 8 GB</li>
                  <li>DirectX: Version 11</li>
                  <li>HDD: 72 GB</li>
                
              </p>
              </div>
            </div>
            </div>
    
            <div class="col-lg-3 col-md-5 col-xs-6">
              <div class="card" style="width: 13rem;">
                <img src="{{ url('uploads/fps') }}/{{ $msi->gam_gem4 }}" class="card-img-top">
                <div class="card-body">
                  <p class="card-text text-center"> Requirement
                
                    <li>OS: Windows 10 ??? 64Bit</li>
                    <li>CPU: Core i3-2100 @ 3.1GHz or AMD Phenom II X4 965 @ 3.4 GHz </li>
                    <li>GPU: NVIDIA GeForce GTX 670 or AMD Radeon R9 270X </li>
                    <li>RAM: 8 GB</li>
                    <li>DirectX: Version 11</li>
                    <li>HDD: 50 GB</li>
                  
                </p>
                </div>
              </div>
              </div>
  </div>     
    </div>      
</div>

@endsection