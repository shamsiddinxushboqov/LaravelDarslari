<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Angor Avto Servis MChJ</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Datatables -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.min.css')}}">
<!-- endDatatables -->


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{'assets/assets/img/avtoicon/7.png'}}" rel="icon">

  <link href="{{'assets/assets/img/apple-touch-icon.png'}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{'assets/assets/vendor/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
  <link href="{{'assets/assets/vendor/icofont/icofont.min.css'}}" rel="stylesheet">
  <link href="{{'assets/assets/vendor/boxicons/css/boxicons.min.css'}}" rel="stylesheet">
  <link href="{{'assets/assets/vendor/owl.carousel/assets/owl.carousel.min.css'}}" rel="stylesheet">
  <link href="{{'assets/assets/vendor/venobox/venobox.css'}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{'assets/assets/css/style.css'}}" rel="stylesheet">




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Biz bilan aloqa -->
     <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/contact/style.css')}}">
     <!-- Biz bilan aloqa tugadi -->
     
     <!-- header -->
     <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet">
     <!-- endheader -->

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

<!-- Gallery Carousel -->
    <!-- <link rel="stylesheet" href="{{asset('assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/OwlCarousel2-2.3.4/docs/assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/lightGallery-master/dist/css/lightgallery.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/air-datepicker-master/dist/css/datepicker.css')}}">
 -->


@yield('style')

</head>
<style>
.fixed-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  font-size: 20px;
  z-index: 5;
}
</style>
<body>
     

<div id="app">
      
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <!-- <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbartop" aria-controls="navbartop" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> -->
                    <!-- <span class="navbar-toggler-icon"></span> -->
                <!-- </button> -->

                <div class="collapse navbar-collapse" id="navbartop">
                    
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-link mr-4"><a href="https://www.facebook.com/shamsiddin.xushboqov.1"><i class="fa fa-facebook"></i></a></li>
                        <li class="nav-link mr-4"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="nav-link mr-4"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li class="nav-link mr-4"><a href="https://t.me/Shamsiddin9802"><i class="fa fa-telegram"></i></a></li>
                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                        
                        <span class="mt-2">Tel:</span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">+998932210069</a>
                        </li>
                        <span class="mt-2">E-pochta:</span>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#sent/KtbxLrjCJqMsqxGlnPCFRnDxjrhbwKRTdq">shamsiddinxushboqov@gmail.com</a> -->
                            <a class="nav-link" href="mailto:shamsiddinxushboqov@gmail.com">shamsiddinxushboqov@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
</nav>


<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-sticky"><!-- fixed-top tepaga qotirib quyadi -->
  

            <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/assets/img/avtoicon/7.png"></a>
              <a class="navbar-brand" href="{{ url('/') }}">
                Angor Avto Servis MChJ
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        <li class="nav-item {{ '/'== request()->path() ? 'active' : '' }}">
                            <a class="nav-link" href="/">{{ __('Bosh sahifa') }}</a>
                        </li>
                        <li class="nav-item {{ 'abouts1'== request()->path() ? 'active' : '' }}">
                            <a class="nav-link" href="/abouts1">{{ __('Biz haqimizda') }}</a>

                        </li>
                        <li class="nav-item {{ 'service1'== request()->path() ? 'active' : '' }}">
                            <a class="nav-link" href="/service1">{{ __('Servis') }}</a>
                        </li>
                        <li class="nav-item {{ 'gallery1'== request()->path() ? 'active' : '' }}">
                            <a class="nav-link" href="/gallery1">{{ __('Gallery') }}</a>
                        </li>
                        <li class="nav-item {{ 'contact1'== request()->path() ? 'active' : '' }}">
                            <a class="nav-link" href="/contact1">{{ __('Biz bilan aloqa') }}</a>
                        </li>
                     @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Kirish') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Ro`yxatdan o`tish') }}</a>
                    </li>
                    @endif
                    @else

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
                </div>
            </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/assets/vendor/jquery/jquery.min.js')}}"></script>
  <!-- <script src="assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="{{asset('assets/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/assets/vendor/venobox/venobox.min.js')}}"></script>

  <!-- <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script> -->
  
 
<!-- <script src="{{asset('assets/js/jQuery.min.js')}}"></script> -->
<!-- <script src="{{asset('assets/js/popper.js')}}"></script> -->
<!-- <script src="{{asset('assets/js/bootstrap.js')}}"></script> -->

<!-- <script src="{{asset('assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script> -->
<!-- <script src="{{asset('assets/plugins/lightGallery-master/dist/js/lightgallery.js')}}"></script>
<script src="{{asset('assets/plugins/lightGallery-master/dist/js/lightgallery-all.js')}}"></script>

<script src="{{asset('assets/plugins/air-datepicker-master/dist/js/datepicker.js')}}"></script> -->


  <!-- Template Main JS File -->
  <script src="{{asset('assets/assets/js/main.js')}}"></script>
@yield('scripts')
</body>
</html>
