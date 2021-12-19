@extends('layouts.dashboard')

@section('content')

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <h1 class="h2 text-uppercase" style="color: white;">berkah rindang kinasih</h1>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('asset/img/theme/team-4.jpg') }}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">
                            Logout
                        </button>
                    </form>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary mb-5">
      <div class="container-fluid">
        <h2 class="h1 text-uppercase text-white pt-5 text-center">update Data produk Berkah rindang kinasih</h2>
        
        <div class="row justify-content-center my-5">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <h2 class="text-uppercase">Produk BRK</h2>
                </div>
                <form role="form" action="{{ url('produk/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="PATCH" name="_method">
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                      </div>
                      <input class="form-control" value="{{ $data->produk }}" type="text" name="produk" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-image"></i></span>
                      </div>
                      <input class="form-control" type="file" name="image" autocomplete="off">
                    </div>
                  </div>
                  <img src="{{ asset($data->foto) }}" alt="" class="w-25 img-fluid mb-3">
                  <i class="text-danger" style="font-size: 12px;"><cite>* Abaikan Jika tidak merubah gambar</cite></i>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-align-justify"></i></span>
                      </div>
                      <textarea name="deskripsi" id="" cols="10" style="height: 20vh;" rows="10" class="form-control">
                        {{ $data->deskripsi }}
                      </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-balance-scale"></i></span>
                      </div>
                      <input class="form-control" value="{{ $data->jenis_produk }}" type="text" name="jenis_produk" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-tags"></i></span>
                      </div>
                      <input class="form-control" value="{{ $data->harga }}" type="text" name="harga" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-school"></i></span>
                      </div>
                      <input class="form-control" value="{{ $data->umkm }}" type="text" name="umkm" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-cubes"></i></span>
                      </div>
                      <input class="form-control" value="{{ $data->stok }}" type="text" name="stok" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-cart-plus"></i></span>
                      </div>
                      <input class="form-control" value="{{ $data->terjual }}" type="text" name="terjual" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Update Data</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid">
      
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
          <div class="copyright text-center text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>

  @endsection