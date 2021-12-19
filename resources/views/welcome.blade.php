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
                            <a class="nav-link" href=""><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><i class="fa fa-user"></i> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('product') }}"><i class="fas fa-cart-plus"></i> Product</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><i class="fa fa-phone"></i> Contact</a>
                        </li>
                  </ul>
                </div>
      </div>
  </nav>

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="assets/image/slide-1.jpeg"
            alt="First slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Light mask</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla aliquam repellat repellendus, esse adipisci iusto laudantium animi reprehenderit quibusdam reiciendis facere culpa earum sapiente quae hic quaerat nisi laboriosam illo! Voluptate, quaerat! Atque corporis voluptates similique recusandae, asperiores sapiente commodi ratione, delectus, laudantium error esse est tempore veritatis? Maiores?</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="assets/image/slide-2.jpeg"
            alt="Second slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Strong mask</h3>
          <p>Secondary text</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="assets/image/slide-1.jpeg"
            alt="Third slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Slight mask</h3>
          <p>Third text</p>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

<main class="mb-5" id="about">

  <div class="container mt-5 mb-5">
    <h1 class="text-center h2 text-uppercase font-weight-bold mb-4">About</h1>
    <div class="row">
      <div class="col-md-5">
          <div class="view zoom overlay">
            <img src="assets/image/wp-profile.jpg" alt="" srcset="" class="w-100 shadow">
            <div class="mask rgba-black-slight"></div>
          </div>
      </div>
      <div class="col-md-7 border-bottom mt-4">
        <div>
          <h3 class=""><i class="fa fa-home"></i> Berkah Rindang Kinasih</h3>
          <p class="text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus pariatur alias libero quo, sunt vero asperiores ad ipsa, id amet beatae nisi omnis accusantium excepturi iusto sed veniam quaerat facilis reprehenderit nobis facere tempora distinctio. Aspernatur perferendis eligendi numquam? Animi.
          </p>
          <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam doloremque cum perferendis, quasi mollitia laboriosam aliquam! Mollitia, reprehenderit officiis. Cumque.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="wp-parralax">
    <div class="view">
      <div class="mask rgba-black-slight"></div>
    </div>
  </div>

  <div class="container" id="produk">
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
              <img class="card-img-top" src="{{ $produk->foto }}" alt="Card image cap">
              <a href="#!">
                  <div class="mask rgba-white-slight"></div>
              </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body">
              <!--Title-->
              <a>
                  <h5 class="card-title text-uppercase">{{ $produk->produk }}</h5>
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

      <a href="{{ url('product') }}" class="btn btn-outline-danger d-block m-auto w-100">SELENGKAPNYA</a>
    </div>
    <!--Grid row-->

    </section>
    <!--Section: Group of personal cards-->
  </div>

  <div class="container mt-5" id="contact">
          <h2 class="font-weight-bold text-center mb-5 text-uppercase">Contact us</h2>
          <div class="row">
            <div class="col-lg-5 col-md-12">
              <div class="">
                  <label class="btn-success btn-rounde">
                    <i class="fa fa-phone"></i>
                  </label>
                  <label class="mt-3 ml-2">Phone</label>
                  <p>&emsp;&emsp;<i class="fa fa-caret-right"></i>  Dani Rizaldi ( +6281-2272-67476  )</p>
                <a href="" class="btn btn-success mr-auto">GO TO PHONE <i class="fa fa-caret-down"></i></a>
              </div>
              <div class="my-4 mb-5">
                  <label class="btn-danger btn-rounde">
                    <i class="fa fa-envelope"></i>
                  </label>
                  <label class="mt-3 ml-2">Email</label>
                  <p>&emsp;&emsp;<i class="fa fa-caret-right"></i>  Dani Rizaldi ( aexitaz28@gmail.com  )</p>
                <a href="" class="btn btn-danger mr-auto">GO TO EMAIL <i class="fa fa-caret-down"></i></a>
              </div>
              <div class="">
                  <h4 class="ml-3 font-weight-bold text-uppercase">Find Us</h4>
                  <div class=""> 
                    <label class="btn-primary btn-rounde mx-3">
                      <a href="#modalfacebook" class="white-text" data-toggle="modal" data-target="">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </label>
                    <label class="btn-orange btn-rounde mx-3">
                      <a href="" class="white-text"><i class="fas fa-cart-plus"></i></a>
                    </label>
                    <label class="btn-blue btn-rounde mx-3">
                      <a href="" class="white-text"><i class="fa fa-shopping-bag"></i></a>
                    </label>
                    <label class="btn-danger btn-rounde mx-3">
                      <a href="" class="white-text"><i class="fab fa-instagram"></i></a>
                    </label>
                  </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12">
              <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.580825005263!2d109.22903901414992!3d-7.400774474922821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ef25207e1e1%3A0xcedb82ef04ed7e7c!2sUniversitas%20Amikom%20Purwokerto!5e0!3m2!1sid!2sid!4v1634926875227!5m2!1sid!2sid" style="border:0; width: 100%; height: 450px;" allowfullscreen="" loading="lazy"></iframe>
              </div>
          </div>
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