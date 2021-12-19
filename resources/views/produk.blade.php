@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar-custom">
      <div class="container">
                <a class="navbar-brand" href="#"><span class="fa fa-home"></span> BRK</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="basicExampleNav">
                  <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main') }}"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#produk') }}"><i class="fa fa-user"></i> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product"><i class="fas fa-cart-plus"></i> Product</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#contact') }}"><i class="fa fa-phone"></i> Contact</a>
                        </li>
                        <li class="nav-item md-form my-0 ml-2">
                          <form action="{{ url('/product/cari') }}" method="get">
                            <input class="form-control mr-sm-2 text-white" type="text" placeholder="Search" aria-label="Search" name="search">
                            <button class="" style="display: none;" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                        </li>
                  </ul>
                </div>
      </div>
  </nav>

  @if(isset($_GET['search']))
  <div class="wp-parralax shadow" style="background-image: url('../assets/image/banner.jpg'); border: none;">
    <div class="view">
      <div class="mask rgba-black-slight"></div>
    </div>
  </div>
  @else
  <div class="wp-parralax shadow" style="background-image: url('/assets/image/banner.jpg'); border: none;">
    <div class="view">
      <div class="mask rgba-black-slight"></div>
    </div>
  </div>
  @endif

<main class="mb-5">

  <div class="container">
    <h1 class="text-center text-uppercase font-weight-bold mt-5">Product</h1>
    <!--Section: Group of personal cards-->
    <section class="mt-3 pb-3">

    <!--Grid row-->
    <div class="row">

      @foreach($datas as $produk)
          <!--Grid column-->
          <div class="col-xs-6 col-lg-3">
          <div class="card card-personal mb-4">

              <!--Card image-->
              <div class="view">
              @if(isset($_GET['search']))
                <img class="card-img-top" src="../{{ $produk->foto }}" alt="Card image cap">
              @else
                <img class="card-img-top" src="/{{ $produk->foto }}" alt="Card image cap">
              @endif
              
              <a href="#!">
                  <div class="mask rgba-white-slight"></div>
              </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body">
              <!--Title-->
              <a>
                  <h4 class="card-title text-uppercase">{{ $produk->produk }}</h4>
              </a>
              <a class="card-meta text-uppercase">{{ $produk->umkm }}</a>

              <!--Text-->
              <p class="card-text text-justify">{{ $produk->deskripsi }}</p>
              <hr>
              <a class="card-meta"><span><i class="fa fa-dollar-sign"></i> Rp. {{ $produk->harga }}</span></a>
              <p class="card-meta float-right"> <i class="fa fa-cart-plus"></i> {{ $produk->terjual }} Terjual</p>
              <button class="btn btn-danger d-block m-auto">
                  Pesan Sekarang <i class="fa fa-paper-plane"></i> 
              </button>
              </div>
              <!--Card content-->

              </div>
        </div>
        <!--Grid column-->
      @endforeach
      <div>
        {{ $datas->links() }}
      </div>
    </div>
    <!--Grid row-->

    </section>
    <!--Section: Group of personal cards-->
  </div>

</main>

<div class="modal fade right" id="modalfacebook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-side modal-bottom-left" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100 text-primary text-uppercase font-weight-bold" id="myModalLabel">
          <i class="fab fa-facebook"></i> Facebook
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer bg-primary">
        <a href="" class="btn btn-blue white-text">Go to Facebook</a>
      </div>
    </div>
  </div>
</div>
<!-- Side Modal Top Right -->

@endsection