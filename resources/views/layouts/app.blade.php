<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Berkah Rindang Kinasih</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('assets/js/mdb.js') }}" defer></script>
    <script src="{{ asset('assets/aos/aos.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/mdb.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/aos/aos.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
    
<footer class="page-footer font-small bg-dark text-light">
  <div class="container mb-4 pt-5 text-center text-md-left">
    <div class="row mt-3">
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4 text-light">
        <h6 class="text-uppercase font-weight-bold">
          <strong>BRK</strong>
        </h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">
          <strong>Tentang</strong>
        </h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!" class="text-light">Home</a>
        </p>
        <p>
          <a href="#!" class="text-light">Product</a>
        </p>
        <p>
          <a href="#!" class="text-light">About</a>
        </p>
        <p>
          <a href="#!" class="text-light">Contact</a>
        </p>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3">
        <h6 class="text-uppercase font-weight-bold">
          <strong>Contact</strong>
        </h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fab fa-facebook-f mr-3"></i> BRK Banyumas</p>
        <p>
          <i class="fab fa-whatsapp mr-3"></i> +62 8112 9890 2339</p>
        <p>
          <i class="fab fa-instagram mr-3"></i> @brkbanyumas</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
