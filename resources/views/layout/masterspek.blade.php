<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{ url('uploads/logoweb.png') }}">
  <title>Harbor &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('larapel/fonts/icomoon/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('larapel/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('larapel/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('larapel/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('larapel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('larapel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('larapel/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('larapel/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset ('larapel/css/style.css')}}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    {{-- Mulai Navbar  --}}
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target bg-white" role="banner" >

        <div class="container"  >
          <div class="row align-items-center position-relative">

            @yield('warnaaktif')
            

          </div>
        </div>

      </header>
      {{-- end navbar --}}


      @yield('container')


      

    
    

    </div>

    <script src="{{ asset('larapel/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('larapel/js/popper.min.js') }}"></script>
    <script src="{{ asset('larapel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('larapel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('larapel/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('larapel/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('larapel/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('larapel/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('larapel/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('larapel/js/aos.js') }}"></script>
    <script src="{{ asset('larapel/js/main.js') }}"></script>

     

  </body>

</html>
