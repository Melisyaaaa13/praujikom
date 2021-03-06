<!DOCTYPE html>
<html lang="en">

<head>
  <title>Siap &mdash; Sistem Informasi Apoteker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/pharma/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('assets/pharma/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/pharma/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('assets/pharma/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('assets/pharma/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/pharma/css/owl.theme.default.min.css')}}">


  <link rel="stylesheet" href="{{asset('assets/pharma/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('assets/pharma/css/style.css')}}">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="/" class="js-logo-clone">Siap</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="shop">Store</a></li>
                <li class="has-children">
                  <a href="#">Dropdown</a>
                  <ul class="dropdown">
                    <li><a href="suplement">Supplements</a></li>
                    <li class="has-children">
                      <a href="vitamin">Vitamins</a>
                      </ul>
                    </li>

                </li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url({{asset('assets/pharma/images/wp.jpg')}});">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              {{-- <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2> --}}
              <h1>Apotek Al-hikmah</h1>
              <p>
                <a href="shop" class="btn btn-primary px-5 py-3">Beli obat sekarang</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="kapsul" class="h-100">
<br>            <p>Apotek yang Melayani Obat Online Terlengkap</p>            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap h-100">
                        <a href="#" class="h-100">
<br>       <p>
            Apotek yang Melayani Beli Obat Online
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                  <br>
               <p>Beli Obat Online, Vitamin, Suplemen dan Alat Kesehatan Lebih Mudah.</p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

            <div class="row">
                @foreach ($artikel as $data)
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                     <a href="shop_single"> <img src="{{asset('assets/img/artikel/'.$data->foto)}}" alt="Image" width="300"></a>
                    <h3 class="text-dark"><a href="{{url('/shop_single/'.$data->slug)}}">
                        {{$data->judul}}</a></h3>
                    <p class="price"> Rp {{$data->harga}}</p>
                </div>
                 @endforeach
            </div>


        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="{{asset('assets/pharma/images/vitaminc.jpeg')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Vitaciminc</a></h3>
                <p class="price">Rp.1500</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="{{asset('assets/pharma/images/hansaplast.jpg')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Hansaplast</a></h3>
                <p class="price">Rp.27000</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="{{asset('assets/pharma/images/sangobion.jpg')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Sangobion</a></h3>
                <p class="price">Rp.13000</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="{{asset('assets/pharma/images/tolak.jpeg')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Tolak Angin</a></h3>
                <p class="price">Rp.15000</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


        <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase"> Info & Tips Kesehatan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap" id="isinya">
            {{-- <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="{{asset('assets/pharma/images/haricuci.jpeg')}}" alt="Image" width="300"></a>
                <h3 class="text-dark"><a href="shop-single">Hari Cuci Tangan Sedunia</a></h3>
              </div>

              <div class="text-center item mb-4">
                <a href="menjagamata"> <img src="{{asset('assets/pharma/images/mata.jpg')}}" alt="Image" width="300"></a>
                <h3 class="text-dark"><a href="menjagamata">Cara sederhana menjaga mata</a></h3>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="{{asset('assets/pharma/images/donorrr.jpeg')}}" alt="Image" width="300"></a>
                <h3 class="text-dark"><a href="shop-single">Donor Darah</a></h3>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="{{asset('assets/pharma/images/janganpanik.jpeg')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Jangan Panik ketika anak sakit</a></h3>
              </div>

            </div> --}}
          </div>
        </div>
      </div>
    </div>





    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="suplement">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Bandung, Indonesia</li>
                <li class="phone"><a >+6281278897755</a></li>
                <li class="email">melisyaza418@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="{{asset('assets/pharma/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/pharma/js/jquery-ui.js')}}"></script>
  <script src="{{asset('assets/pharma/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/pharma/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/pharma/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/pharma/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/pharma/js/aos.js')}}"></script>
 <script src="{{asset('js/tag.js')}}"></script>
  <script src="{{asset('assets/pharma/js/main.js')}}"></script>

</body>

</html>
