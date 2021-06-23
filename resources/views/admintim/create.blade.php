@extends('layout/masteradmin')

@section('title', 'Tambah Data Tim')

@section('warnaaktif')
<li><a href="{{ url('/dashboard')}}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
<li><a href="{{ url('/dashboardlepy')}}" class=""><i class="lnr lnr-laptop"></i> <span>Laptop</span></a></li>
<li><a href="{{ url('/dashboardtim')}}" class="active"><i class="lnr lnr-users"></i> <span>Tim E-Sport</span></a></li>
@endsection

@section('container')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    
                                <h3 class="text-center btn-primary">Tambah Data Tim</h3>
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
                       

                                <form method="post" action="/dashboardtim" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-md-5">

                                          <div class="form-group">
                                            <label for="nama">Nama Tim</label>
                                          <input type="text" class="form-control textarea" id="nama" placeholder="Masukkan Nama Tim" name="nama" 
                                          value="{{ old('nama') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="fb">Link Facebook</label>
                                          <input type="text" class="form-control " id="fb" placeholder="Masukkan link Facebook" name="fb" 
                                          value="{{ old('fb') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="twt">Link Twitter</label>
                                          <input type="text" class="form-control " id="twt" placeholder="Masukkan link Twitter" name="twt" 
                                          value="{{ old('twt') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="ig">Link Instagram</label>
                                          <input type="text" class="form-control " id="ig" placeholder="Masukkan link Instagram" name="ig" 
                                          value="{{ old('ig') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="tourdota">Nama Tournament DOTA 2</label>
                                          <input type="text" class="form-control " id="tourdota" placeholder="Masukkan Nama Tournament DOTA 2" name="tourdota" 
                                          value="{{ old('tourdota') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="tgldota">Tanggal Tournament DOTA 2 </label>
                                          <input type="text" class="form-control " id="tgldota" placeholder="Masukkan tanggal Tournament DOTA 2" name="tgldota" 
                                          value="{{ old('tgldota') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="posdota">Posisi Juara di Tournament DOTA 2</label>
                                          <input type="text" class="form-control " id="posdota" placeholder="Masukkan Juara di Tournament DOTA 2" name="posdota" 
                                          value="{{ old('posdota') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="haddota">Jumlah hadiah dari Tournament DOTA 2</label>
                                          <input type="text" class="form-control " id="haddota" placeholder="Masukkan jumlah hadiah dari Tournament DOTA 2" name="haddota" 
                                          value="{{ old('haddota') }}">
                                          </div>
                                          

                                    </div>
                                    <div class="col-md-5">

                                          
                                          <div class="form-group">
                                            <label for="yt">Link YouTube</label>
                                          <input type="text" class="form-control " id="yt" placeholder="Masukkan link YouTube" name="yt" 
                                          value="{{ old('yt') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="tourcs">Nama Tournament Counter-Strike</label>
                                          <input type="text" class="form-control " id="tourcs" placeholder="Masukkan Nama Tournament Counter-Strike" name="tourcs" 
                                          value="{{ old('tourcs') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="tglcs">Tanggal Tournament Counter-Strike</label>
                                          <input type="text" class="form-control " id="tglcs" placeholder="Masukkan tanggal Tournament Counter-Strike 2" name="tglcs" 
                                          value="{{ old('tglcs') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="poscs">Posisi juara di Tournament Counter-Strike</label>
                                          <input type="text" class="form-control " id="poscs" placeholder="Masukkan Juara di Tournament Counter-Strike" name="poscs" 
                                          value="{{ old('poscs') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="hadcs">Jumlah hadiah dari Tournament Counter-Strike</label>
                                          <input type="text" class="form-control " id="hadcs" placeholder="Masukkan jumlah hadiah dari Tournament Counter-Strike" name="hadcs" 
                                          value="{{ old('hadcs') }}">
                                          </div>
                                          <div class="form-group">
                                            <label for="ket">Keterangan</label>
                                          <textarea type="text" class="form-control " id="ket" placeholder="Masukkan keterangan" name="ket" 
                                          value="{{ old('ket') }}"></textarea>
                                          </div>

                                    </div>
                                    <div class="col-md-5">
                                          <div class="form-group">
                                            <label for="gambar">Masukkan Gambar(uk 500 x 500)</label>
                                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                                          </div>
                                          <button type="submit" class="btn btn-primary">Tambah Data!</button>
                                              <a href="/dashboardtim">kembali</a>
                                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection