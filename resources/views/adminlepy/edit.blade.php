@extends('layout/masteradmin')

@section('title', 'Edit Laptop')

@section('warnaaktif')
<li><a href="{{ url('/dashboard')}}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
<li><a href="{{ url('/dashboardlepy')}}" class="active"><i class="lnr lnr-laptop"></i> <span>Laptop</span></a></li>
<li><a href="{{ url('/dashboardtim')}}" class=""><i class="lnr lnr-users"></i> <span>Tim E-Sport</span></a></li>
@endsection

@section('container')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    
                                <h3 class="text-center btn-warning">Ubah Data Laptop</h3>
                                <br>

                                @if(count($errors->all()))
                                  @foreach ($errors->all() as $error)
                                      <div class="alert alert-danger">
                                          <Strong>Oops!</Strong> {{$error}}
                                      </div>
                                  @endforeach
                                @endif

                                @if(Session::has('success'))
                                      <div class="alert alert-success">
                                          <strong>Success!</strong> {{Session::get('success')}}
                                      </div>
                                @endif

                                    <form method="post" action="/dashboardlepy/{{ $laptop->id }}" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    
                                    <div class="col-md-5">

                                        <div class="form-group">
                                          <label for="nama">Nama Laptop</label>
                                        <input type="text" class="form-control " id="nama" placeholder="Masukkan Nama Laptop" name="nama" 
                                        value="{{ $laptop->nama }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="cpu">Cpu Laptop</label>
                                          <input type="text" class="form-control " id="cpu" placeholder="Masukkan Cpu Laptop" name="cpu"
                                          value="{{ $laptop->cpu }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="vga">Vga Laptop</label>
                                          <input type="text" class="form-control" id="vga" placeholder="Masukkan Vga Laptop" name="vga"
                                          value="{{ $laptop->vga }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="os">OS Laptop</label>
                                          <input type="text" class="form-control" id="os" placeholder="Masukkan OS Laptop" name="os"
                                          value="{{ $laptop->os }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="layar">Layar Laptop</label>
                                          <input type="text" class="form-control" id="layar" placeholder="Masukkan Layar Laptop" name="layar"
                                          value="{{ $laptop->layar }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="hdd">HDD Laptop</label>
                                          <input type="text" class="form-control" id="hdd" placeholder="Masukkan HDD Laptop" name="hdd"
                                          value="{{ $laptop->hdd }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="ram">RAM Laptop</label>
                                          <input type="text" class="form-control" id="ram" placeholder="Masukkan RAM Laptop" name="ram"
                                          value="{{ $laptop->ram }}">
                                        </div>

                                    </div> 

                                    <div class="col-md-5">

                                        <div class="form-group">
                                          <label for="port1">USB Laptop</label>
                                          <input type="text" class="form-control" id="port1" placeholder="Masukkan Tipe USB Laptop" name="port1"
                                          value="{{ $laptop->port1 }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="port2">Wifi, LAN, Bluetooth Laptop</label>
                                          <input type="text" class="form-control" id="port2" placeholder="Masukkan Tipe Wifi, LAN, Bluetooth Laptop" name="port2"
                                          value="{{ $laptop->port2 }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="port3">Port Lainnya Laptop</label>
                                          <input type="text" class="form-control" id="port3" placeholder="Masukkan port3 Laptop" name="port3"
                                          value="{{ $laptop->port3 }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="batre">Battery Laptop</label>
                                          <input type="text" class="form-control" id="batre" placeholder="Masukkan Battery Laptop" name="batre"
                                          value="{{ $laptop->batre }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="berat">Berat Laptop</label>
                                          <input type="text" class="form-control" id="berat" placeholder="Masukkan Berat Laptop" name="berat"
                                          value="{{ $laptop->berat }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="markfire">3DMark fire Strike</label>
                                          <input type="number" class="form-control" id="markfire" placeholder="Masukkan score 3DMark Fire Strike" name="markfire"
                                          value="{{ $laptop->markfire }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="marktime">3DMark Time Spy</label>
                                          <input type="number" class="form-control" id="marktime" placeholder="Masukkan score 3DMark Time Spy" name="marktime"
                                          value="{{ $laptop->marktime }}">
                                        </div>
                                        <div class="form-group">
                                          <label for="harga">Harga Laptop</label>
                                          <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Laptop" name="harga"
                                          value="{{ $laptop->harga }}">
                                        </div>

                                    </div>
                                      
                                    <div class="col-md-5">

                                          <div class="form-group">
                                            <label for="gambar">Masukkan gambar depan laptop(uk 400 x 270)</label>
                                            <img src="{{ url('uploads')}}/{{ $laptop->gambar }}" class="card-img"
                                             alt="" height="auto" width="250px">
                                             <br>
                                             <a>{{ $laptop->gambar }}</a>
                                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                                          </div>
                                          <div class="form-group">
                                            <label for="logo">Masukkan Logo(kualitas HD)</label>
                                            <img src="{{ url('uploads/laptop')}}/{{ $laptop->logo }}" class="card-img"
                                             alt="" height="auto" width="250px">
                                             <br>
                                             <a>{{ $laptop->logo }}</a>
                                            <input type="file" class="form-control-file" id="logo" name="logo">
                                          </div>
                                          <div class="form-group">
                                            <label for="gam_lep1">Masukkan gambar samping laptop(uk 700 x 500)</label>
                                            <img src="{{ url('uploads/laptop')}}/{{ $laptop->gam_lep1 }}" class="card-img"
                                             alt="" height="auto" width="250px">
                                             <br>
                                             <a>{{ $laptop->gam_lep1 }}</a>
                                            <input type="file" class="form-control-file" id="gam_lep1" name="gam_lep1">
                                          </div>
                                          <div class="form-group">
                                            <label for="gam_lep2">Masukkan gambar atas laptop(uk 700 x 500)</label>
                                            <img src="{{ url('uploads/laptop')}}/{{ $laptop->gam_lep2 }}" class="card-img"
                                             alt="" height="auto" width="250px">
                                             <br>
                                             <a>{{ $laptop->gam_lep2 }}</a>
                                            <input type="file" class="form-control-file" id="gam_lep2" name="gam_lep2">
                                          </div>
                                          <div class="form-group">
                                            <label for="gam_lep3">Masukkan gambar belakang laptop(uk 700 x 500)</label>
                                            <img src="{{ url('uploads/laptop')}}/{{ $laptop->gam_lep3 }}" class="card-img"
                                             alt="" height="auto" width="250px">
                                             <br>
                                             <a>{{ $laptop->gam_lep3 }}</a>
                                            <input type="file" class="form-control-file" id="gam_lep3" name="gam_lep3">
                                          </div>
                                    </div>

                                    <div class="col-md-5">

                                            <div class="form-group">
                                              <label for="gam_gem1">Masukkan gambar game PUBG</label>
                                              <br>
                                              <label for="gam_gem1"></label>
                                              <br>
                                              <img src="{{ url('uploads/fps')}}/{{ $laptop->gam_gem1 }}" class="card-img"
                                             alt="" height="auto" width="130px">
                                             <br>
                                             <a>{{ $laptop->gam_gem1 }}</a>
                                              <input type="file" class="form-control-file" id="gam_gem1" name="gam_gem1">
                                            </div>
                                            <div class="form-group">
                                              <label for="gam_gem2">Masukkan gambar game Forza Horizon 4</label>
                                              <br>
                                              <label for="gam_gem2"></label>
                                              <br>
                                              <img src="{{ url('uploads/fps')}}/{{ $laptop->gam_gem2 }}" class="card-img"
                                             alt="" height="auto" width="130px">
                                             <br>
                                             <a>{{ $laptop->gam_gem2 }}</a>
                                              <input type="file" class="form-control-file" id="gam_gem2" name="gam_gem2">
                                            </div>
                                            <div class="form-group">
                                              <label for="gam_gem3">Masukkan gambar game GTA V</label>
                                              <br>
                                              <label for="gam_gem3"></label>
                                              <br>
                                              <img src="{{ url('uploads/fps')}}/{{ $laptop->gam_gem3 }}" class="card-img"
                                             alt="" height="auto" width="130px">
                                             <br>
                                             <a>{{ $laptop->gam_gem3 }}</a>
                                              <input type="file" class="form-control-file" id="gam_gem3" name="gam_gem3">
                                            </div>
                                            <div class="form-group">
                                              <label for="gam_gem4">Masukkan gambar game Fifa 19</label>
                                              <br>
                                              <label for="gam_gem4"></label>
                                              <br>
                                              <img src="{{ url('uploads/fps')}}/{{ $laptop->gam_gem4 }}" class="card-img"
                                             alt="" height="auto" width="130px">
                                             <br>
                                             <a>{{ $laptop->gam_gem4 }}</a>
                                              <input type="file" class="form-control-file" id="gam_gem4" name="gam_gem4">
                                            </div>
                                            
                                    </div>
                                    <div class="col-md-5">
                                      
                                      <button type="submit" class="btn btn-warning">Ubah Data!</button>
                                      <a href="/dashboardlepy">kembali</a>
                                      
                                    </div>
                                      
                                    
                                    

                                  </form>
                           
                           
                </div>
            </div>
        </div>
    </div>
    
@endsection