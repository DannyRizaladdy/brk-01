<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Berkah Rindang Kinasih</title>

    <!-- Scripts -->
    <script src="{{ asset('asset/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <script src="{{ asset('asset/js/argon.js?v=1.2.0') }}"></script>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('asset/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('asset/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/argon.css?v=1.2.0') }}" type="text/css">
</head>
<body>
    <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <h2 class="h1">BRK</h2>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('home') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('produk') }}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Produk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('produk/create') }}">
                <i class="fa fa-plus-circle text-red"></i>
                <span class="nav-link-text">Tambah Produk</span>
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">PENGGELOLAAN</span>
          </h6>
          
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('kelola') }}">
                <i class="ni ni-cart text-primary"></i>
                <span class="nav-link-text">Barang Terjual</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('stok') }}">
                <i class="fa fa-plus-circle text-danger"></i>
                <span class="nav-link-text">Tambah Stock</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('exportData') }}">
                <i class="fa fa-book text-black"></i>
                <span class="nav-link-text">Buat Laporan</span>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
    


    @yield('content')
</body>
</html>
