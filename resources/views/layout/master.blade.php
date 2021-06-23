<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{ asset('uploads/logoweb.png') }}">
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


    
    

    
    {{-- mulai footer --}}
    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h3 class="heading-39291">Tentang Kami</h3>
                <p>Website ini merupakan sebuah platform untuk memberikan informasi tentang berbagai laptop gaming 
                  dari berbagai brand terkenal, yang mana informasi ini sangat dibutuhkan untuk para gamer pemula 
                  yang ingin membeli laptop dengan spesifikasi mumpuni. </p>
              </div>

              <div class="col-md-3 ml-auto">
                <h3 class="heading-39291">Follow Us</h3>
          {{-- <ul class="list-unstyled footer-link"> --}}
            {{-- <li class="d-block mb-3">
              <span class="d-block text-black small text-uppercase font-weight-bold">Address:</span>
              <span>Taman Alamanda Blok E6 no 42, Tambun Utara, Bekasi</span></li> --}}
              <a href="https://web.facebook.com/ryan.pasha.169" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
            <a href="https://www.instagram.com/ryanpasha07/?hl=id" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <h3 class="heading-39291">Contact Info</h3>
            
            <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Email:</span><span>ryanpasha22@gmail.com</span></li>
            <li class="d-block mb-3"><span class="d-block text-black small text-uppercase font-weight-bold">Phone:</span><span>(+62)812-6465-6645</span></li>
            
            </form>
          </div>
        </div>
        {{-- <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            {{-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a> --}}
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            {{-- </p>
            </div>
          </div> --}}

        </div>
      </div>
    </footer>

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
