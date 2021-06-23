@extends('layout/masteradmin')

@section('title', 'Dashboard Laptop')

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
                    
                    <div class="col-md-4">
                        
                        

                            <div class="panel-heading">
                                <h3 class="list-group-item text-center">Data Laptop</h3>
                                <br>

                                <form class="right" method="GET" action="/dashboardlepy">
                                    <div class="input-group">
                                        <input type="text" name="cari" class="form-control" placeholder="Search laptop...">
                                        <span class="input-group-btn"><button type="submit" class="btn btn-danger">Go</button></span>
                                    </div>
                                </form>
                                <br>
                                <a href="/dashboardlepy/create" class="btn btn-primary">Tambah Data Laptop</a>
                                
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status')}}
                                    </div>
                                @endif

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">AKSI</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">CPU</th>
                                            <th scope="col">VGA</th>
                                            <th scope="col">OS</th>
                                            <th scope="col">LAYAR</th>
                                            <th scope="col">TIPE USB</th>
                                            <th scope="col">Wi-Fi, LAN, BLUETOOTH</th>
                                            <th scope="col">PORT LAINNYA</th>
                                            <th scope="col">HDD</th>
                                            <th scope="col">RAM</th>
                                            <th scope="col">BATTERY</th>
                                            <th scope="col">BERAT</th>
                                            <th scope="col">3DMark FireStrike</th>
                                            <th scope="col">3DMark Time Spy</th>
                                            <th scope="col">HARGA</th>
                                            <th scope="col">LOGO</th>
                                            <th scope="col">GAMBAR LEPY 1</th>
                                            <th scope="col">GAMBAR LEPY 2</th>
                                            <th scope="col">GAMBAR LEPY 3</th>
                                            <th scope="col">GAMBAR GAME 1</th>
                                            <th scope="col">GAMBAR GAME 2</th>
                                            <th scope="col">GAMBAR GAME 3</th>
                                            <th scope="col">GAMBAR GAME 4</th>
                                        </tr>
                                    </thead>
                                     
                                    <tbody>
                                        @foreach ( $laptop as $lp )
                                        <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>

                                        <a href="{{ url('dashboardlepy', $lp->id) }}/edit" >
                                            <button type="submit" class="btn btn-warning mb-4">Edit</button>
                                        </a>

                                        <form action="{{ url('dashboardlepy', $lp->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                                <button type="submit" class="btn btn-danger mt-4" onclick="return confirm
                                                ('Apakah anda ingin menghapus data tersebut ?')">Hapus</button>
                                            </form>
                                        </td>
                                            <td>
                                                <img src="{{ url('uploads')}}/{{ $lp->gambar }}" class="card-img"
                                                alt="" height="auto" width="250px">{{ $lp->gambar }}
                                            </td>
                                            <td>{{ $lp->nama }}</td>
                                            <td>{{ $lp->cpu }}</td>
                                            <td>{{ $lp->vga }}</td>
                                            <td>{{ $lp->os }}</td>
                                            <td>{{ $lp->layar }}</td>
                                            <td>{{ $lp->port1 }}</td>
                                            <td>{{ $lp->port2 }}</td>
                                            <td>{{ $lp->port3 }}</td>
                                            <td>{{ $lp->hdd }}</td>
                                            <td>{{ $lp->ram }}</td>
                                            <td>{{ $lp->batre }}</td>
                                            <td>{{ $lp->berat }}</td>
                                            <td>{{ $lp->markfire }}</td>
                                            <td>{{ $lp->marktime }}</td>
                                            <td>{{ $lp->harga }}</td>
                                            <td>
                                                <img src="{{ url('uploads/laptop')}}/{{ $lp->logo }}" class="card-img"
                                                alt="" height="auto" width="250px">{{ $lp->logo }}
                                            </td>
                                            <td>
                                                <img src="{{ url('uploads/laptop')}}/{{ $lp->gam_lep1 }}" class="card-img"
                                                alt="" height="auto" width="250px">{{ $lp->gam_lep1 }}
                                            </td>
                                            <td>
                                                <img src="{{ url('uploads/laptop')}}/{{ $lp->gam_lep2 }}" class="card-img"
                                                alt="" height="auto" width="250px">{{ $lp->gam_lep2 }}
                                            </td>
                                            <td>
                                                <img src="{{ url('uploads/laptop')}}/{{ $lp->gam_lep3 }}" class="card-img"
                                                alt="" height="auto" width="250px">{{ $lp->gam_lep3 }}
                                            </td>
                                            <td>
                                                <img src="{{ url('uploads/fps')}}/{{ $lp->gam_gem1 }}" class="card-img"
                                                alt="" height="auto" width="100px">{{ $lp->gam_gem1 }}
                                            </td>
                                            <td>
                                                <img src="{{ url('uploads/fps')}}/{{ $lp->gam_gem2 }}" class="card-img"
                                                alt="" height="auto" width="100px">{{ $lp->gam_gem2 }}
                                            </td>
                                            <td>
                                                <img src="{{ url('uploads/fps')}}/{{ $lp->gam_gem3 }}" class="card-img"
                                                alt="" height="auto" width="100px">{{ $lp->gam_gem3 }}
                                            </td>
                                            <td>
                                                <img src="{{ url('uploads/fps')}}/{{ $lp->gam_gem4 }}" class="card-img"
                                                alt="" height="auto" width="100px">{{ $lp->gam_gem4 }}
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                    
                                </table>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection