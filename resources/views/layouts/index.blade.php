<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>Perpustakaan</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('butterfly/css/styleCarousel.css') }}" rel="stylesheet">
        <link href="{{ asset('butterfly/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('butterfly/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('butterfly/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('butterfly/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('butterfly/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" rel="stylesheet">
        <!-- css carousel -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <!-- Template Main CSS File -->
        <link href="{{ asset('butterfly/css/style.css') }}" rel="stylesheet">


</head>

<body>
<div id="app">
  <div class="main-wrapper main-wrapper-1">
    <!-- begin:navbar -->
    @include('layouts.navbar')
    <!-- end:navbar -->

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
      @include('layouts.footer')
      </footer>
  </div>
</div>



  <!-- Vendor JS Files -->
  <script src="{{ asset('butterfly/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('butterfly/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('butterfly/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('butterfly/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('butterfly/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('butterfly/vendor/php-email-form/validate.js') }}"></script>


</body>
<!-- Template Main JS File -->
<script src="{{ asset('butterfly/js/main.js') }}"></script>
<script>$('.carousel').carousel()</script>
<!-- js carousel-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@stack('jsfooter')

</html>
