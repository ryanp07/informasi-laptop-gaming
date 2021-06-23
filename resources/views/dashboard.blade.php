@extends('layout/masteradmin')

@section('title', 'Dashboard')

@section('warnaaktif')
<li><a href="{{ url('/dashboard')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
<li><a href="{{ url('/dashboardlepy')}}" class=""><i class="lnr lnr-laptop"></i> <span>Laptop</span></a></li>
<li><a href="{{ url('/dashboardtim')}}" class=""><i class="lnr lnr-users"></i> <span>Tim E-Sport</span></a></li>
@endsection

@section('container')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row text-center">
                        <h3>HALLO, Selamat datang dihalaman Admin</h3>                                
                        <p>Silahkan memilih menu disamping untuk mengatur webnnya!</p>
                        <img src="{{ asset('uploads/logoadmin.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection