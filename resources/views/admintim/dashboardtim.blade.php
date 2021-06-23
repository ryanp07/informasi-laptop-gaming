@extends('layout/masteradmin')

@section('title', 'Dashboard Tim E-Sport')

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
                    <div class="col-md-4">
                        
                            <div class="panel-heading">
                                <h3 class="list-group-item text-center">Data Tim</h3>
                                <br>

                                <form class="right" method="GET" action="/dashboardtim">
                                    <div class="input-group">
                                        <input type="text" name="cari" class="form-control" placeholder="Search Tim...">
                                        <span class="input-group-btn"><button type="submit" class="btn btn-danger">Go</button></span>
                                    </div>
                                </form>
                                
                                <br>
                                <a href="/dashboardtim/create" class="btn btn-primary">Tambah Data Tim</a>

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
                                            <th scope="col">GAMBAR</th>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">KETERANGAN</th>
                                            <th scope="col">TANGGAL TOURNAMENT DOTA 2</th>
                                            <th scope="col">NAMA TOURNAMENT DOTA 2</th>
                                            <th scope="col">POSISI JUARA DOTA 2</th>
                                            <th scope="col">JUMLAH HADIAH DOTA 2</th>
                                            <th scope="col">TANGGAL TOURNAMENT COUNTER-STRIKE</th>
                                            <th scope="col">NAMA TOURNAMENT COUNTER-STRIKE</th>
                                            <th scope="col">POSISI JUARA COUNTER-STRIKE</th>
                                            <th scope="col">JUMLAH HADIAH COUNTER-STRIKE</th>
                                            <th scope="col">FACEBOOK</th>
                                            <th scope="col">TWITTER</th>
                                            <th scope="col">INSTAGRAM</th>
                                            <th scope="col">YOUTUBE</th>
                                        </tr>
                                    </thead>
                                     
                                    <tbody>
                                        @foreach ( $tim as $t )
                                        <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>

                                            <a href=" {{ url('dashboardtim', $t->id) }}/edit" class="btn btn-warning">Edit</a>
    
                                            <form action="{{ url('dashboardtim', $t->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm
                                                    ('Apakah anda ingin menghapus data tersebut ?')">Hapus</button>
                                                </form>
    
                                            </td>
                                            <td><img src="{{ url('uploads/tim')}}/{{ $t->gambar }}" class="card-img"
                                            alt="" height="auto" width="200px">{{ $t->gambar }}</td>
                                            <td>{{ $t->nama }}</td>
                                            <td>{{ $t->ket }}</td>
                                            <td>{{ $t->tgldota }}</td>
                                            <td>{{ $t->tourdota }}</td>
                                            <td>{{ $t->posdota }}</td>
                                            <td>{{ $t->haddota }}</td>
                                            <td>{{ $t->tglcs }}</td>
                                            <td>{{ $t->tourcs }}</td>
                                            <td>{{ $t->poscs }}</td>
                                            <td>{{ $t->hadcs }}</td>
                                            <td>{{ $t->fb }}</td>
                                            <td>{{ $t->twt }}</td>
                                            <td>{{ $t->ig }}</td>
                                            <td>{{ $t->yt }}</td>
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