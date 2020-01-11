<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
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
              <a href="index" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="shop">Store</a></li>
                <li class="has-children">
                  <a href="#">Dropdown</a>
                  <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li class="has-children">
                      <a href="#">Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>

                  </ul>
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Cart</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{asset('assets/pharma/images/product_02.png')}}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Ibuprofen</h2>
                    </td>
                    <td>$55.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                  </tr>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{asset('assets/pharma/images/product_01.png')}}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Bioderma</h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-md btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block">Continue Shopping</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-md px-4">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout'">Proceed To
                      Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url({{asset('assets/pharma/images/bg_2.jpg')}});">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url({{asset('assets/pharma/images/bg_1.jpg')}});">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url({{asset('assets/pharma/images/bg_2.jpg')}});">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
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
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
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
      <div class="container">







	    <div class="content-category">

			<div class="col-md-4">

							<a class="fancybox" href="#567" title="TRAMADOL KAPSUL 50 MG"><img src="/images/PRODUK/TRAMADOL.jpg" alt="" height="125">	<br><br>
                            TRAMADOL KAPSUL 50 MG</a>

                            <div id="567" class="content-details container" style="display: none;">
                            		<div class="content-images"><img src="/images/PRODUK/TRAMADOL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>TRAMADOL KAPSUL 50 MG</h2>
									<p>Tiap kapsul mengandung :<br>Tramadol HCl 50 mg</p>
<p>&nbsp;</p>
<p>Dus, 5 strip @ 10 kapsul</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#566" title="PETHIDIN Hcl"><img src="/images/PRODUK/PETHIDINE.jpg" alt="" height="125">	<br><br>
                            PETHIDIN Hcl</a>

                            <div id="566" class="content-details container" style="display: none;">
                            		<div class="content-images"><img src="/images/PRODUK/PETHIDINE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>PETHIDIN Hcl</h2>
									<p>Tiap ml injeksi mengandung :<br>Pethidin HCl 50 mg</p>
<p>&nbsp;</p>
<p>Dus, 10 ampul @ 2 ml</p>
<p>&nbsp;</p>
<p>Analgesik Narkotika</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#565" title="PARACETAMOL"><img src="/images/PRODUK/PARACETAMOL-GAB.jpg" alt="" height="125">	<br><br>
                            PARACETAMOL</a>

                            <div id="565" class="content-details container" style="display: none;">
                            		<div class="content-images"><img src="/images/PRODUK/PARACETAMOL-GAB.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>PARACETAMOL</h2>
									<p>Tiap 5 ml mengandung :&nbsp;&nbsp;<br>Acetaminophenum, kristal 120 mg&nbsp; &nbsp;(Dus, botol @ 60 ml)</p>
<p>Tiap tablet mengandung :<br>Paracetamol 500 mg&nbsp; &nbsp;(Botol plastik @ 100 tablet)</p>
<p>Tiap tablet mengandung :<br>Acetaminophen 500 mg&nbsp; &nbsp;(Dus, 10 strip @ 10 tablet)</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#564" title="NATRIUM DIKLOFENAK"><img src="/images/PRODUK/NATRIUM-DIKLOFENAK-.jpg" alt="" height="125">	<br><br>
                            NATRIUM DIKLOFENAK</a>

                            <div id="564" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/NATRIUM-DIKLOFENAK-.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>NATRIUM DIKLOFENAK</h2>
									<p>Tiap tablet salut enterik mengandung&nbsp;Natrium diklofenak 25 mg dan 50 mg</p>
<p>Dus, 5 strip @ 10 tablet salut enterik</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#563" title="MORPHINE TABLET 10 MG"><img src="/images/PRODUK/MORFINA-GAB-420.jpg" alt="" height="125">	<br><br>
                            MORPHINE TABLET 10 MG</a>

                            <div id="563" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/MORFINA-GAB-420.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>MORPHINE TABLET 10 MG</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap tablet mengandung Morphini HCl 13.17 mg setara dengan Morfin 10 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;Botol @ 30 tablet</p>
<p>KELAS TERAPI&nbsp; :&nbsp; &nbsp;ANESTETIK LOKAL</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#562" title="METHADONE SIRUP 50MG / 5ML"><img src="/" alt="" height="125">	<br><br>
                            METHADONE SIRUP 50MG / 5ML</a>

                            <div id="562" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>METHADONE SIRUP 50MG / 5ML</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap ml sirup mengandung : Methadone HCl 10 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;Botol @ 1000 ml</p>
<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANALGETIK NARKOTIK</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#561" title="LIDOCAIN INJEKSI 2%"><img src="/" alt="" height="125">	<br><br>
                            LIDOCAIN INJEKSI 2%</a>

                            <div id="561" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>LIDOCAIN INJEKSI 2%</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap ml mengandung : Lidocain HCl H2O 21.9 mg setara dengan Lidocain HCl 20 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;Dus, 100 ampul @ 2 ml</p>
<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANASTETIK LOKAL</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#560" title="ASAM MEFANAMAT"><img src="/images/PRODUK/ASAM-MEFENAMAT-STRIP-424.jpg" alt="" height="125">	<br><br>
                            ASAM MEFANAMAT</a>

                            <div id="560" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/ASAM-MEFENAMAT-STRIP-424.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ASAM MEFANAMAT</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap kaptab mengandung&nbsp;Asam Mefenamat 500 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;Dus, 10 strip @ 10 kaptab salut selaput</p>
<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANALGETIK - ANTIINFLAMATIK</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#559" title="ANTALGIN"><img src="/images/PRODUK/ANTALGIN.jpg" alt="" height="125">	<br><br>
                            ANTALGIN</a>

                            <div id="559" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/ANTALGIN.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ANTALGIN</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap tablet mengandung Methampiron 500 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;Dus, 10 strip @ 10 tablet</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp;Botol plastik 100 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#569" title="ANTASIDA DOEN"><img src="/images/PRODUK/Antasida-doen.jpg" alt="" height="125">	<br><br>
                            ANTASIDA DOEN</a>

                            <div id="569" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/Antasida-doen.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ANTASIDA DOEN</h2>
									<p>Tiap tablet mengandung :<br>AlOH 200 mg;MgOH 200 mg</p>
<p>Botol @ 100 tablet</p>
<p>Dus, 10 strip @ 10 tablet</p>
<p>Dus, botol @ 60 ml</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#571" title="PYRANTEL"><img src="/images/PRODUK/YRANTEL.jpeg" alt="" height="125">	<br><br>
                            PYRANTEL</a>

                            <div id="571" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/YRANTEL.jpeg" alt=""></div>
                                    <div class="content-text">
                                    <h2>PYRANTEL</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;</p>
<p>Tiap tablet mengandung Pyrantel pamoate setara dengan Pyrantel 125 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;</p>
<p>Dus, 7 catchcover @ 1 strip @ 4 tablet</p>
<p>Dus, 15 catchcover @ 1 strip @ 4 tablet</p>
<p>Botol 100 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#570" title="DIETHYLCARBAMAZINE CITRATE"><img src="/" alt="" height="125">	<br><br>
                            DIETHYLCARBAMAZINE CITRATE</a>

                            <div id="570" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>DIETHYLCARBAMAZINE CITRATE</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap tablet mengandung : Diethylcarbamazine Citrate 100 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#568" title="ALBENDAZOLE"><img src="/images/PRODUK/Albendazole-400-mg.jpg" alt="" height="125">	<br><br>
                            ALBENDAZOLE</a>

                            <div id="568" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/Albendazole-400-mg.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ALBENDAZOLE</h2>
									<p>'Tiap tablet kunyah mengandung :<br>Albendazole 400 mg</p>
<p>Dus, 5 strip @ 6 tablet dan&nbsp;Dus, 10 strip @ 10 tablet kunyah</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#572" title="METRONIDAZOLE TABLET"><img src="/images/PRODUK/METRONIDAZOLE-GAB.jpg" alt="" height="125">	<br><br>
                            METRONIDAZOLE TABLET</a>

                            <div id="572" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/METRONIDAZOLE-GAB.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>METRONIDAZOLE TABLET</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:</p>
<p>Tiap tablet mengandung : Metronidazole 250 mg</p>
<p>Tiap tablet mengandung : Metronidazole 500 MG</p>
<p>KEMASAN&nbsp; &nbsp;:</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#586" title="TABLET TAMBAH DARAH NEO"><img src="/images/PRODUK/TABLET-TAMBAH-DARAH.jpg" alt="" height="125">	<br><br>
                            TABLET TAMBAH DARAH NEO</a>

                            <div id="586" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/TABLET-TAMBAH-DARAH.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>TABLET TAMBAH DARAH NEO</h2>
									<p>Tiap tablet salut selaput mengandung :<br>Ferrous Fumarate <br>Asam folat</p>
<ul>
<li>Dus, 3 strip @ 10 tsg</li>
<li>Dus, 10 strio @ 10 tsg</li>
</ul>
<p>Tiap tablet salut selaput mengandung :<br>Ferrous Fumarate <br>Asam folat</p>
<ul>
<li>
<p>Dus, 3 strip @ 10 tss<br>Dus, 10 strio @ 10 tss</p>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#573" title="FERROUS SULOHATE SIRUP"><img src="/images/PRODUK/FEROUS-SULFAT.jpg" alt="" height="125">	<br><br>
                            FERROUS SULOHATE SIRUP</a>

                            <div id="573" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/FEROUS-SULFAT.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>FERROUS SULOHATE SIRUP</h2>
									<p>Tiap 5 ml sirup mengandung :Ferrous Sulphate 7H2O 150 mg setara dengan elemen Fe 30 mg</p>
<p>Botol 150 ml</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#574" title="ALPRAZOLAM"><img src="/" alt="" height="125">	<br><br>
                            ALPRAZOLAM</a>

                            <div id="574" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>ALPRAZOLAM</h2>
									<p>Tiap tablet mengandung :<br>Alprazolam 0,5 mg<br>Alprazolam 1 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#575" title="KLORPROMAZINA TABLET SALUT SELAPUT 100 MG"><img src="/images/PRODUK/CHLORPROMAZINE-415.jpg" alt="" height="125">	<br><br>
                            KLORPROMAZINA TABLET SALUT SELAPUT 100 MG</a>

                            <div id="575" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CHLORPROMAZINE-415.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>KLORPROMAZINA TABLET SALUT SELAPUT 100 MG</h2>
									<p>'Tiap tablet salut selaput mengandung : Klopromazina HCl 100 mg</p>
<p>'Dus, 10 strip @ 10 tablet salut selaput</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#576" title="GLIMEPIRIDE TABLET"><img src="/" alt="" height="125">	<br><br>
                            GLIMEPIRIDE TABLET</a>

                            <div id="576" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>GLIMEPIRIDE TABLET</h2>
									<p>'Tiap tablet mengandung : Glimepiride 1 mg</p>
<p>'Tiap tablet mengandung : Glimepiride 2 mg</p>
<p>'Tiap tablet mengandung : Glimepiride 3 mg</p>
<p>'Tiap tablet mengandung : Glimepiride 4 mg</p>
<p>&nbsp;</p>
<p>Dus, 5 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#577" title="FUROSEMIDE TABLET 40 MG"><img src="/images/PRODUK/FUROSEMID.jpg" alt="" height="125">	<br><br>
                            FUROSEMIDE TABLET 40 MG</a>

                            <div id="577" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/FUROSEMID.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>FUROSEMIDE TABLET 40 MG</h2>
									<p>Tiap tablet mengandung : Furosemide 40 mg</p>
<p>Dus, 20 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#612" title="DIMENHYDRINATE"><img src="/images/PRODUK/DIMENHIDRINATE.jpg" alt="" height="125">	<br><br>
                            DIMENHYDRINATE</a>

                            <div id="612" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/DIMENHIDRINATE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>DIMENHYDRINATE</h2>
									<p>Tiap tablet mengandung :&nbsp; Dimenhydrinate 50 mg</p>
<p>Botol plastik @ 100 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#579" title="METOCLOPRAMIDE Hcl Tablet 10 Mg"><img src="/images/PRODUK/METOCLOPRAMIDE-309.jpg" alt="" height="125">	<br><br>
                            METOCLOPRAMIDE Hcl Tablet 10 Mg</a>

                            <div id="579" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/METOCLOPRAMIDE-309.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>METOCLOPRAMIDE Hcl Tablet 10 Mg</h2>
									<p>Tiap tablet mengandung : Metoclopramide HCl 10 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#578" title="METOCLOPRAMIDE Hcl Tablet 5 Mg"><img src="/images/PRODUK/METOCLOPRAMIDE-309.jpg" alt="" height="125">	<br><br>
                            METOCLOPRAMIDE Hcl Tablet 5 Mg</a>

                            <div id="578" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/METOCLOPRAMIDE-309.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>METOCLOPRAMIDE Hcl Tablet 5 Mg</h2>
									<p>Tiap tablet mengandung : Metoclopramide HCl 5 mg</p>
<p>Dus, 10 blister @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#615" title="MICONAZOLE NITRATE KRIM 2%"><img src="/images/PRODUK/MICONAZOLE.jpg" alt="" height="125">	<br><br>
                            MICONAZOLE NITRATE KRIM 2%</a>

                            <div id="615" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/MICONAZOLE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>MICONAZOLE NITRATE KRIM 2%</h2>
									<p>Tiap gram mengandung : Miconazole Nitrat 0.02 gram</p>
<p>Dus, 24 tube @ 10 gram</p>
<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTIFUNGI</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#614" title="KETOCONAZOLE KRIM 2%"><img src="/images/PRODUK/KETOCONAZOLE.jpg" alt="" height="125">	<br><br>
                            KETOCONAZOLE KRIM 2%</a>

                            <div id="614" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/KETOCONAZOLE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>KETOCONAZOLE KRIM 2%</h2>
									<p>Tiap tube @ 10 g mengandung Ketoconazole 200 mg</p>
<p>Dus, tube @ 10 gram</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#581" title="GRISEOFULVIN TABLET 25 MG"><img src="/images/PRODUK/GRISEOFULVIN-384.jpg" alt="" height="125">	<br><br>
                            GRISEOFULVIN TABLET 25 MG</a>

                            <div id="581" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/GRISEOFULVIN-384.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>GRISEOFULVIN TABLET 25 MG</h2>
									<p>Tiap tablet mengandung : Griseofulvin Micronize 125 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Anti Fungi - Sistemik</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#580" title="FLUCONAZOLE KAPSUL 150 MG"><img src="/images/PRODUK/FLUCONAZOLE.jpg" alt="" height="125">	<br><br>
                            FLUCONAZOLE KAPSUL 150 MG</a>

                            <div id="580" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/FLUCONAZOLE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>FLUCONAZOLE KAPSUL 150 MG</h2>
									<p>Tiap kapsul mengandung :<br>Fluconazole 150 mg</p>
<p>Dus, 1 Strip @ 10 kapsul</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#658" title="Sulfadoxine Pyrimethamine Tablet "><img src="/" alt="" height="125">	<br><br>
                            Sulfadoxine Pyrimethamine Tablet </a>

                            <div id="658" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>Sulfadoxine Pyrimethamine Tablet </h2>
									<p>Tiap tablet mengandung :<br>Pyrimethamine 25 mg<br>Sulfadoxinum 500 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#654" title="Quinine Tablet Salut Selaput 222 mg"><img src="/images/PRODUK/QUININE-SULFAT.jpg" alt="" height="125">	<br><br>
                            Quinine Tablet Salut Selaput 222 mg</a>

                            <div id="654" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/QUININE-SULFAT.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>Quinine Tablet Salut Selaput 222 mg</h2>
									<p>Tiap tablet salut selaput mengandung :<br>Quinine sulphate 222 mg</p>
<p>Dus, 10 strip @ 6 tablet salut selaput</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#582" title="KOMBIPAK UNTUK MALARIA"><img src="/" alt="" height="125">	<br><br>
                            KOMBIPAK UNTUK MALARIA</a>

                            <div id="582" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>KOMBIPAK UNTUK MALARIA</h2>
									<p>Tiap 1 blister mengandung : 12 tablet Amodiaquin HCl 200 mg dan 12 tablet Artesunate 50 mg</p>
<p>Dus, 1 blister @ 24 tablet (12 tablet Amodiaquin HCl 200 mg + 12 tablet Artesunate 50 mg)</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#583" title="KETOCONAZOLE TABLET 200 MG"><img src="/images/PRODUK/KETOCONAZOLE.jpg" alt="" height="125">	<br><br>
                            KETOCONAZOLE TABLET 200 MG</a>

                            <div id="583" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/KETOCONAZOLE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>KETOCONAZOLE TABLET 200 MG</h2>
									<p>Tiap tablet mengandung : Ketoconazole 200 mg</p>
<p>Dus, 5 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#656" title="Rifampicin / Isoniazid"><img src="/images/PRODUK/rifampicin.jpg" alt="" height="125">	<br><br>
                            Rifampicin / Isoniazid</a>

                            <div id="656" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/rifampicin.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>Rifampicin / Isoniazid</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Antituberculosis, tidak termasuk Streptomycin</p>
<ul>
<li>Rifampicin 75 Mg/ Isoniazid 50 Mg /Pyrazinamide 150 Mg
<ul>
<li>
<p>Tiap tablet dispersible mengandung :<br>Rifampicin 75 mg<br>Isoniazid 50 mg<br>Pyrazinamide 150 mg</p>
<ul>
<li>Dus, 6 blister @ 28 tablet</li>
</ul>
</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Rifampicin 75 Mg/ Isoniazid 50 Mg
<ul>
<li>
<p>Tiap tablet dispersible mengandung :<br>Rifampicin 75 mg<br>Isoniazid 50 mg</p>
<ul>
<li>Dus, 12 blister @ 28 tablet</li>
</ul>
</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Rifampicin 150 Mg/ Isoniazid 150 Mg
<ul>
<li>
<p>Tiap tablet salut selaput mengandung :<br>Rifampicin 150 mg<br>Isoniazid 150 mg</p>
<ul>
<li>Dus, 7 blister @ 28 tablet</li>
</ul>
</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Rifampicin 150 Mg/ Isoniazid 150 Mg
<ul>
<li>
<p>Tiap tablet salut selaput mengandung :<br>Rifampicin 150 mg<br>Isoniazid 150 mg</p>
<ul>
<li>Dus, 6 blister @ 28 tablet</li>
</ul>
</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Pyrazinamide 400 Mg/ Ethambutol 275 Mg/ Rifampicin 150 Mg/ Isoniazid 75 Mg Kaptab Salut Selaput
<ul>
<li>
<p>Tiap kaptab salut selaput mengandung :<br>Pyrazinamide 400 mg<br>Ethambutol 275 mg<br>Rifampicin 150 mg<br>Isoniazid 75 mg</p>
<ul>
<li>Dus, 3 blister @ 28 kaptab</li>
</ul>
</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Rifampicin 150 Mg/ Isoniazid 75 Mg/ Pyrazinamide 400 Mg/ Ethambutol 275 Mg
<ul>
<li>
<p>Tiap kaptab selaput mengandung :<br>Rifampicin 150 mg<br>Isoniazid 75 mg <br>Pyrazinamide 400 mg<br>Ethambutol 275 mg</p>
<ul>
<li>Dus, 6 blister @ 28 kaptab</li>
</ul>
</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Rifampicin 150 Mg/ Isoniazid 75 Mg/ Pyrazinamide 400 Mg/ Ethambutol 275 Mg
<ul>
<li>
<p>Tiap kaptab salut selaput mengandung :<br>Rifampicin 150 mg<br>Isoniazid 75 mg <br>Pyrazinamide 400 mg<br>Ethambutol 275 mg</p>
<ul>
<li>Dus, 9 blister @ 28 kaptab</li>
</ul>
</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#653" title="PYRAZINAMIDE"><img src="/images/PRODUK/PYRAZINAMIDE.jpg" alt="" height="125">	<br><br>
                            PYRAZINAMIDE</a>

                            <div id="653" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/PYRAZINAMIDE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>PYRAZINAMIDE</h2>
									<p>Tiap tablet mengandung :<br>Pyrazinamide 500 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#584" title="ISONIAZIDE"><img src="/" alt="" height="125">	<br><br>
                            ISONIAZIDE</a>

                            <div id="584" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>ISONIAZIDE</h2>
									<p>Isoniazide Tablet 300 mg :</p>
<ol>
<li>Dus, 10 strip @ 10 tablet</li>
<li>Botol plastik @ 100 tablet</li>
</ol>
<p>Isoniazide Tablet 100 mg :</p>
<ol>
<li>Dus, 10 strip @ 10 tablet</li>
</ol>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#585" title="PREDNISONE"><img src="/images/PRODUK/PREDNISONE.jpg" alt="" height="125">	<br><br>
                            PREDNISONE</a>

                            <div id="585" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/PREDNISONE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>PREDNISONE</h2>
									<p>Tiap tablet mengandung :<br>Prednisonum 5 mg</p>
<ul>
<li>Botol @ 100 tablet</li>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#587" title="SALBUTAMOL"><img src="/images/PRODUK/SALBUTAMOL.jpg" alt="" height="125">	<br><br>
                            SALBUTAMOL</a>

                            <div id="587" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/SALBUTAMOL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>SALBUTAMOL</h2>
									<p>Tiap tablet mengandung :<br>Salbutamol sulphate 2,41 mg setara Salbutamol 2 mg</p>
<p>&nbsp;</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#608" title="TETRACYCLINE 500 MG"><img src="/images/PRODUK/TETRACYCLINE-250.jpg" alt="" height="125">	<br><br>
                            TETRACYCLINE 500 MG</a>

                            <div id="608" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/TETRACYCLINE-250.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>TETRACYCLINE 500 MG</h2>
									<p>Tiap kapsul mengandung :<br>Tetracycline HCl 500 mg</p>
<p>Dus, 10 strip @ 10 kapsul</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#607" title="TETRACYCLINE KAPSUL 250 MG"><img src="/images/PRODUK/TETRACYCLINE-250.jpg" alt="" height="125">	<br><br>
                            TETRACYCLINE KAPSUL 250 MG</a>

                            <div id="607" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/TETRACYCLINE-250.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>TETRACYCLINE KAPSUL 250 MG</h2>
									<p>Tiap kapsul mengandung :<br>Tetracycline HCl 250 mg</p>
<p>Dus, 10 strip @ 10 kapsul</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#606" title="RIFAMPICIN"><img src="/images/PRODUK/rifampicin.jpg" alt="" height="125">	<br><br>
                            RIFAMPICIN</a>

                            <div id="606" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/rifampicin.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>RIFAMPICIN</h2>
									<ul>
<li>Rifampicin 450 mg<br><br>
<ul>
<li>Tiap kaptab salut selaput mengandung Rifampicin 450 mg</li>
<li>Dus, 1o strip @ 10 kaptab salut selaput</li>
</ul>
</li>
</ul>
<ul>
<li>Rifampicin 600 mg
<ul>
<li>
<p>Tiap kaptab salut selaput mengandung Rifampicin 600 mg</p>
</li>
<li>
<p>Dus, 10 strip @ 10 kaptab salut selaput</p>
</li>
</ul>
</li>
<li>Rifampicin 300 mg
<ul>
<li>
<p>Tiap kapsul mengandung&nbsp;Rifampicin 300 mg</p>
</li>
<li>Dus, 10 strip @ 10 kapsul</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#605" title="OXYTETRACYCLINE HCL"><img src="/images/PRODUK/OXYTETRACYCLINE-GAB-395.jpg" alt="" height="125">	<br><br>
                            OXYTETRACYCLINE HCL</a>

                            <div id="605" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/OXYTETRACYCLINE-GAB-395.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>OXYTETRACYCLINE HCL</h2>
									<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap gram mengandung :<br>Oxytetracycline HCl setara dengan Oxytetracycline 30 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;Dus, 25 tube @ 5 gram</p>
<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTIBIOTIK TROPIKAL</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#604" title="LEVOFLOXACIN TABLET SELAPUT 500 MG"><img src="/images/PRODUK/LEVOFLOXACIN.jpg" alt="" height="125">	<br><br>
                            LEVOFLOXACIN TABLET SELAPUT 500 MG</a>

                            <div id="604" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/LEVOFLOXACIN.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>LEVOFLOXACIN TABLET SELAPUT 500 MG</h2>
									<p>Tiap tablet salut selaput mengandung : Levofloxacin HCl 500 mg</p>
<p>Dus, 5 strip @ 10 tablet salut selaput</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#603" title="KOMBIPAK AZITHROMYCIN - CEFIXIME, KAPTAB SALUT SELAPUT 500 Mg + KAPSUL 200 Mg"><img src="/" alt="" height="125">	<br><br>
                            KOMBIPAK AZITHROMYCIN - CEFIXIME, KAPTAB SALUT SELAPUT 500 Mg + KAPSUL 200 Mg</a>

                            <div id="603" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>KOMBIPAK AZITHROMYCIN - CEFIXIME, KAPTAB SALUT SELAPUT 500 Mg + KAPSUL 200 Mg</h2>
									<p>Azithromycin Dihidrat 524.00 mg <br>Cefixime Trihidrat 224.00 mg</p>
<p>Dus, 10 Amplop @ 22 Strip<br>(1 Strip @ 2 Kaptab Azithromycin + 1 Strip @ 2 Kapsul Cefixime)</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#601" title="ETHAMBUTOL"><img src="/images/PRODUK/ETHAMBUTOL.jpg" alt="" height="125">	<br><br>
                            ETHAMBUTOL</a>

                            <div id="601" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/ETHAMBUTOL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ETHAMBUTOL</h2>
									<p>Tiap tablet salut selaput mengandung&nbsp; : Ethambutol HCl 250 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet salut selaput</li>
<li>Dus, 20 strip @ 10 tablet salut selaput</li>
</ul>
<p>Tiap tablet salut selaput mengandung :&nbsp; Ethambutol HCl 400 mg</p>
<ul>
<li>Dus, 7 blister @ 28 tablet salut selaput</li>
</ul>
<p>Tiap tablet mengandung :&nbsp; Ethambutol HCl 400 mg</p>
<ul>
<li>Dus, 24 blister @ 28 tablet salut selaput</li>
</ul>
<p>Tiap tablet mengandung :&nbsp; Ethambutol HCl 500 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet salut selaput</li>
</ul>
<p>&nbsp;</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#600" title="ERYTHROMYCIN"><img src="/" alt="" height="125">	<br><br>
                            ERYTHROMYCIN</a>

                            <div id="600" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>ERYTHROMYCIN</h2>
									<p>Tiap tablet mengandung : Erythromycin stearate granul 347 mg setara Erythromycin 250 mg</p>
<p>Dus, 10 strip @ 10 kapsul</p>
<p>&nbsp;</p>
<p>Tiap 5 ml mengandung : Erythromycin Ethyl succinate 234 setara Erythromycin 200 mg</p>
<p>Botol @ 60 ml</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#599" title="DOXYCYCLINE"><img src="/" alt="" height="125">	<br><br>
                            DOXYCYCLINE</a>

                            <div id="599" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>DOXYCYCLINE</h2>
									<p>Doxycycline Tablet 100 Mg</p>
<p>Tiap tablet mengandung :&nbsp; Doxycycline 100 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#598" title="COTRIMOKSAZOLE PEDIATRIK"><img src="/" alt="" height="125">	<br><br>
                            COTRIMOKSAZOLE PEDIATRIK</a>

                            <div id="598" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>COTRIMOKSAZOLE PEDIATRIK</h2>
									<p>Tiap tablet mengandung: Sulfamethoxazole (micronized dan&nbsp; non micronized) 100 mg; Trimethoprime 20 mg</p>
<p>Botol @ 100 tablet</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#597" title="COTRIMOKSAZOLE"><img src="/" alt="" height="125">	<br><br>
                            COTRIMOKSAZOLE</a>

                            <div id="597" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>COTRIMOKSAZOLE</h2>
									<p>Tiap tablet mengandung: Sulfamethoxazole (micronized) 200 mg; Trimethoprime 40 mg</p>
<p>Botol @ 60 ml</p>
<p>Dus, 10 strip @ 10 tablet</p>
<p>Botol @ 100 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#596" title="CIPROFLOXACIN"><img src="/" alt="" height="125">	<br><br>
                            CIPROFLOXACIN</a>

                            <div id="596" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>CIPROFLOXACIN</h2>
									<p>Tiap tablet mengandung : Ciprofloxacin 500 mg</p>
<p>Dus, 5 strip @ 10 tablet salut selaput</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#595" title="CHLORAMPHENICOL PALMITATE"><img src="/images/PRODUK/CHLORAMPENICOL.jpg" alt="" height="125">	<br><br>
                            CHLORAMPHENICOL PALMITATE</a>

                            <div id="595" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CHLORAMPENICOL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CHLORAMPHENICOL PALMITATE</h2>
									<p>Tiap 5 ml mengandung :&nbsp; Chloramphenicol&nbsp; 125 mg (Chloramphenicol Palmitate)</p>
<p>Botol @ 60 ml</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#594" title="CHLORAMPHENICOL 250 MG"><img src="/images/PRODUK/CHLORAMPENICOL.jpg" alt="" height="125">	<br><br>
                            CHLORAMPHENICOL 250 MG</a>

                            <div id="594" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CHLORAMPENICOL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CHLORAMPHENICOL 250 MG</h2>
									<p>Tiap kapsul mengandung : Chloramphenicol 250 mg</p>
<p>Dus, 10 strip @ 10 kapsul</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#593" title="CHLORAMPHENICOL 1%"><img src="/images/PRODUK/CHLORAMPENICOL.jpg" alt="" height="125">	<br><br>
                            CHLORAMPHENICOL 1%</a>

                            <div id="593" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CHLORAMPENICOL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CHLORAMPHENICOL 1%</h2>
									<p>Tiap ml mengandung&nbsp; : Chloramphenicol&nbsp; 1 %</p>
<p>Dus, 24 tube @ 5gr</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#592" title="CEFIXIME"><img src="/images/PRODUK/CEFIXIME.jpeg" alt="" height="125">	<br><br>
                            CEFIXIME</a>

                            <div id="592" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CEFIXIME.jpeg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CEFIXIME</h2>
									<p>Tiap kapsul mengandung : Cefixime 100 mg</p>
<p>Dus, 3 strip @10 kapsul</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#591" title="CEFADROXIL"><img src="/" alt="" height="125">	<br><br>
                            CEFADROXIL</a>

                            <div id="591" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>CEFADROXIL</h2>
									<p>Tiap 5 ml mengandung : Cefadroxil 125 mg/5 ml</p>
<p>Dus, botol @ 60 ml</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#590" title="AZITHROMYCIN"><img src="/images/PRODUK/AZITROMICIN.jpg" alt="" height="125">	<br><br>
                            AZITHROMYCIN</a>

                            <div id="590" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/AZITROMICIN.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>AZITHROMYCIN</h2>
									<p>Tiap kaptab mengandung :<br>Azithromycin dihydrate setara Azithromycin 500 mg</p>
<p>Dus, 2 strip @ 10 kaptab salut selaput</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#589" title="AMPICILLIN"><img src="/images/PRODUK/AMPICILLIN.jpg" alt="" height="125">	<br><br>
                            AMPICILLIN</a>

                            <div id="589" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/AMPICILLIN.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>AMPICILLIN</h2>
									<p>Tiap tablet mengandung :<br>Ampicillin 500 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#588" title="AMOXICILIN"><img src="/images/PRODUK/AMOXICILLIN.jpg" alt="" height="125">	<br><br>
                            AMOXICILIN</a>

                            <div id="588" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/AMOXICILLIN.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>AMOXICILIN</h2>
									<p>Tiap kaptab mengandung :<br>Amoxicillin 500 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#611" title="GLIBENCLAMIDE"><img src="/" alt="" height="125">	<br><br>
                            GLIBENCLAMIDE</a>

                            <div id="611" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>GLIBENCLAMIDE</h2>
									<p>Tiap tablet mengandung : Glibenclamide 5 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Antidiadetik Sulfunilurea</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#610" title="ZINK TABLET DISPERSIBEL "><img src="/images/PRODUK/zinkdispersible_content_310.jpg" alt="" height="125">	<br><br>
                            ZINK TABLET DISPERSIBEL </a>

                            <div id="610" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/zinkdispersible_content_310.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ZINK TABLET DISPERSIBEL </h2>
									<p>Tiap tablet dispersibel mengandung Zink Sulfat 7 Hidrat 88 mg setara dengan zink elemental 20 mg</p>
<p>Dus, 10 strip @ 10 tablet dipersibel</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#609" title="ORALIT"><img src="/images/PRODUK/ORALIT.jpg" alt="" height="125">	<br><br>
                            ORALIT</a>

                            <div id="609" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/ORALIT.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ORALIT</h2>
									<p>Tiap sachet mengandung :</p>
<ul>
<li>Natrium klorida 0,52 gram</li>
<li>Kalium klorida 0,30 gram</li>
<li>Trisodium sitrat dihidrat 0,58 gram</li>
<li>Glukosa anhidrat 2,7 gram</li>
</ul>
<p>Dus, 100 sachet @ 4,1 gram</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#613" title="PHENOBARBITAL"><img src="/images/PRODUK/PHENOBARBITAL.jpg" alt="" height="125">	<br><br>
                            PHENOBARBITAL</a>

                            <div id="613" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/PHENOBARBITAL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>PHENOBARBITAL</h2>
									<p>Tiap tablet mengandung :<br>Phenobarbital 30 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
<li>Botol plastik @ 100 tablet</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#616" title="ALLOPURINOL"><img src="/images/PRODUK/Allopurinol-100.jpg" alt="" height="125">	<br><br>
                            ALLOPURINOL</a>

                            <div id="616" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/Allopurinol-100.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ALLOPURINOL</h2>
									<p>Tiap tablet mengandung :<br>Albendazole 100 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#617" title="ANTIHEMOROID"><img src="/images/PRODUK/ANTI-HAEMOROID.jpg" alt="" height="125">	<br><br>
                            ANTIHEMOROID</a>

                            <div id="617" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/ANTI-HAEMOROID.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ANTIHEMOROID</h2>
									<p>Tiap supp mengandung :<br>Bismut subgalat 150 mg; heksaklorofen 2,5 mg; salep lignokain 10 mg; sengoksida 120 mg</p>
<p>Dus, 10 suppositoria @ 2 g</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#619" title="SIMVASTATIN TABLET 20 MG"><img src="/images/PRODUK/SIMVASTATIN.jpg" alt="" height="125">	<br><br>
                            SIMVASTATIN TABLET 20 MG</a>

                            <div id="619" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/SIMVASTATIN.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>SIMVASTATIN TABLET 20 MG</h2>
									<p>Tiap tablet mengandung :<br>Simvastatin 20 mg</p>
<p>Dus, 5 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#618" title="SIMVASTATIN TABLET 10 MG"><img src="/images/PRODUK/SIMVASTATIN.jpg" alt="" height="125">	<br><br>
                            SIMVASTATIN TABLET 10 MG</a>

                            <div id="618" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/SIMVASTATIN.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>SIMVASTATIN TABLET 10 MG</h2>
									<p>Tiap tablet mengandung :<br>Simvastatin 10 mg</p>
<p>&nbsp;</p>
<p>Dus, 5 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#623" title="DILTIAZEM"><img src="/images/PRODUK/DILTIAZEM.jpg" alt="" height="125">	<br><br>
                            DILTIAZEM</a>

                            <div id="623" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/DILTIAZEM.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>DILTIAZEM</h2>
									<p>Tiap tablet mengandung :&nbsp; Diltiazem 30 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#622" title="CLONIDINE"><img src="/images/PRODUK/CLONIDINE.jpg" alt="" height="125">	<br><br>
                            CLONIDINE</a>

                            <div id="622" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CLONIDINE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CLONIDINE</h2>
									<p>Tiap tablet mengandung : Clonidine 0,15 mg</p>
<p>Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#621" title="CAPTROPIL"><img src="/images/PRODUK/CAPTOPRIL.jpg" alt="" height="125">	<br><br>
                            CAPTROPIL</a>

                            <div id="621" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CAPTOPRIL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CAPTROPIL</h2>
									<ul>
<li>Tiap tablet mengandung : Captopril 12,5 mg
<ul>
<li>Dus, 6 strip @10 tablet</li>
</ul>
</li>
<li>Tiap tablet mengandung : Captopril 12,5 mg
<ul>
<li>Dus, 10 strip @10 tablet</li>
</ul>
</li>
<li>Tiap tablet mengandung : Captopril 25 mg
<ul>
<li>Dus, 6 strip @10 tablet</li>
</ul>
</li>
<li>Tiap tablet mengandung : Captopril 25 mg
<ul>
<li>Dus, 10 strip @10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#620" title="AMLODIPINE"><img src="/images/PRODUK/AMLODIPINE-GAB.jpg" alt="" height="125">	<br><br>
                            AMLODIPINE</a>

                            <div id="620" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/AMLODIPINE-GAB.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>AMLODIPINE</h2>
									<ul>
<li>Tiap tablet mengandung: Amlodipine Besylate setara Amlodipin 5 mg
<ul>
<li>Dus, 5 strip @ 10 tablet</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Tiap tablet mengandung: Amlodipine Besylate setara Amlodipine 10 mg
<ul>
<li>Dus, 5 strip @ 10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#664" title="Bonescan Kaef"><img src="/" alt="" height="125">	<br><br>
                            Bonescan Kaef</a>

                            <div id="664" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>Bonescan Kaef</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;RADIOFARMAKA</p>
<ul>
<li>Tiap vial mengandung Acidum methylene diphosphonicum 10 mg' SnCl2 2 H2O 0,238 mg, Acidum ascorbicum 2 mg
<ul>
<li>Dus, @ 5 vial</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#663" title="Water Pro Injeksi"><img src="/" alt="" height="125">	<br><br>
                            Water Pro Injeksi</a>

                            <div id="663" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>Water Pro Injeksi</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;PELARUT</p>
<ul>
<li>Tiap ampul mengandung 5 ml water for injeksi
<ul>
<li>Dus, 60 ampul @ 5 ml</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#662" title="Vitamin A Tablet Salut Gula 20.000 Si"><img src="/images/PRODUK/vita20.000_content_249.jpg" alt="" height="125">	<br><br>
                            Vitamin A Tablet Salut Gula 20.000 Si</a>

                            <div id="662" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/vita20.000_content_249.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>Vitamin A Tablet Salut Gula 20.000 Si</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;VITAMIN</p>
<p>Tiap tablet salut gula mengandung: Axerophtholi Acetas 500 52.5 mg setara dengan Vitamin A 20.000 SI</p>
<p>Dus, botol plastik @ 100 tablet salut gula</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#661" title="Vitamin K Tablet Salut Gula 10 Mg"><img src="/images/PRODUK/vitc50_content_319.jpg" alt="" height="125">	<br><br>
                            Vitamin K Tablet Salut Gula 10 Mg</a>

                            <div id="661" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/vitc50_content_319.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>Vitamin K Tablet Salut Gula 10 Mg</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;VITAMIN</p>
<p>Tiap tablet salut gula mengandung : menadion natrium bisulfit 10 mg</p>
<p>Dus, 10 strip @ 10 tablet salut gula</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#660" title="Vitamin A Palmitate 200.000 Iu"><img src="/images/PRODUK/vita20.000_content_249.jpg" alt="" height="125">	<br><br>
                            Vitamin A Palmitate 200.000 Iu</a>

                            <div id="660" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/vita20.000_content_249.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>Vitamin A Palmitate 200.000 Iu</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;VITAMIN</p>
<ul>
<li>Tiap kapsul lunak mengandung: Vitamin A Palmitat (1.7 juta IU/g (axeropthol) 129.529 mg setara dengan Vitamin A 200.000 IU
<ul>
<li>Botol plastik @ 50 kapsul lunak</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#659" title="Vitamin A Palmitate 100.000 Iu"><img src="/images/PRODUK/vita20.000_content_249.jpg" alt="" height="125">	<br><br>
                            Vitamin A Palmitate 100.000 Iu</a>

                            <div id="659" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/vita20.000_content_249.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>Vitamin A Palmitate 100.000 Iu</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;VITAMIN</p>
<ul>
<li>Tiap kapsul lunak mengandung: Vitamin A Palmitat (1.7 juta IU/g (axeropthol) 129.529 mg setara dengan Vitamin A 200.000 IU
<ul>
<li>Botol plastik @ 50 kapsul lunak</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#657" title="153Sm - Edtmp"><img src="/" alt="" height="125">	<br><br>
                            153Sm - Edtmp</a>

                            <div id="657" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>153Sm - Edtmp</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;RADIOFARMAKA</p>
<li style="display: inline !important;">Tiap Vial mengandung : Samarium - Ethylenene diamine tetra methylene phosphonic acid 40 - 60 mCi/ml</li>
<ul>
<li>Dus @ 1 Vial</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#655" title="RANITIDIN"><img src="/images/PRODUK/RANITIDINE-305.jpg" alt="" height="125">	<br><br>
                            RANITIDIN</a>

                            <div id="655" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/RANITIDINE-305.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>RANITIDIN</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTI ULCER</p>
<ul>
<li>
<p>Tiap tablet salut selaput mengandung :<br>Ranitidin HCl setara dengan Ranitidin 150 mg</p>
</li>
<li>Dus, 3 strip @ 10 tablet salut selaput</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#652" title="PROPANOLOL"><img src="/" alt="" height="125">	<br><br>
                            PROPANOLOL</a>

                            <div id="652" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>PROPANOLOL</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Penghambat reseptor beta</p>
<ul>
<li>
<p>Tiap tablet mengandung :<br>Propanolol 40 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#651" title="POVIDONE IODINE"><img src="/images/PRODUK/IODINE-GABUNG-387.jpg" alt="" height="125">	<br><br>
                            POVIDONE IODINE</a>

                            <div id="651" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/IODINE-GABUNG-387.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>POVIDONE IODINE</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTISEPTIK</p>
<ul>
<li>
<p>Tiap ml mengandung :<br>PVP Iodine 10% setara Iodium 1%</p>
<ul>
<li>Botol @ 300 ml</li>
<li>Botol @ 30 ml</li>
<li>Botol @ 1000 ml</li>
<li>Botol @ 60 ml</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#650" title="PIROXICAM"><img src="/images/PRODUK/PIROXICAM-GAB.jpg" alt="" height="125">	<br><br>
                            PIROXICAM</a>

                            <div id="650" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/PIROXICAM-GAB.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>PIROXICAM</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTIREMATIK</p>
<ul>
<li>
<p>Tiap tablet mengandung :<br>Piroxicam 10 mg</p>
</li>
<li>
<p>Tiap tablet mengandung :<br>Piroxicam 20 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#649" title="PIL KB I KOMBINASI"><img src="/" alt="" height="125">	<br><br>
                            PIL KB I KOMBINASI</a>

                            <div id="649" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>PIL KB I KOMBINASI</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;HORMON KB</p>
<ul>
<li>
<p>Tiap tablet mengandung :<br>Levonorgestrel 0,15 mg<br>Ethynilestradiol 0,03 mg</p>
<ul>
<li>Dus, 100 blister @ 28 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#648" title="Pherphenazine"><img src="/" alt="" height="125">	<br><br>
                            Pherphenazine</a>

                            <div id="648" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>Pherphenazine</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Psikoleptik</p>
<ul>
<li>
<p>Tiap tablet mengandung :<br>Pherphenazine 4 mg</p>
<ul>
<li>Botol @ 100 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#647" title="PAPAVERIN"><img src="/images/PRODUK/PAPAVERINE-306.jpg" alt="" height="125">	<br><br>
                            PAPAVERIN</a>

                            <div id="647" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/PAPAVERINE-306.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>PAPAVERIN</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Antispasmodik</p>
<ul>
<li>
<p>Tiap tablet mengandung :<br>Papaverine HCl 40 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#646" title="OMEPRAZOLE"><img src="/images/PRODUK/OMEPRAZOLE-139.jpg" alt="" height="125">	<br><br>
                            OMEPRAZOLE</a>

                            <div id="646" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/OMEPRAZOLE-139.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>OMEPRAZOLE</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTIULCER</p>
<ul>
<li>
<p>Tiap kapsul mengandung :<br>Omeprazole pellet setara Omeprazole 20 mg</p>
</li>
<li>Dus, 3 strip @ 10 kapsul</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#645" title="NIFEDIPINE"><img src="/images/PRODUK/NIFEDIPINE.jpg" alt="" height="125">	<br><br>
                            NIFEDIPINE</a>

                            <div id="645" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/NIFEDIPINE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>NIFEDIPINE</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;TERAPI JANTUNG</p>
<ul>
<li>
<p>Tiap kaptab mengandung :<br>Nevirapine 200 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#644" title="METHYLERGOMETRINE TABLET SALUT"><img src="/images/PRODUK/METHILERGOMETRIN-397.jpg" alt="" height="125">	<br><br>
                            METHYLERGOMETRINE TABLET SALUT</a>

                            <div id="644" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/METHILERGOMETRIN-397.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>METHYLERGOMETRINE TABLET SALUT</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Oxytocic - Ergot alkaloid</p>
<ul>
<li>Methylergometrine Tablet Salut Selaput 0.125 Mg
<ul>
<li>Tiap tablet salut selaput mengandung : Methylergometrini maleas 0.125 mg<br data-mce-bogus="1">
<ul>
<li>Dus, 10 strip @ 10 tablet salut selaput</li>
</ul>
</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#643" title="MELOXICAM"><img src="/images/PRODUK/MELOXICAM-GAB.jpg" alt="" height="125">	<br><br>
                            MELOXICAM</a>

                            <div id="643" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/MELOXICAM-GAB.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>MELOXICAM</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Antiinflamasi dan Antirematik</p>
<ul>
<li>Meloxicam Tablet 15 Mg
<ul>
<li>Tiap tablet mengandung : Meloxicam 15 mg<br data-mce-bogus="1">
<ul>
<li>Dus, 2 strip @ 10 tablet</li>
</ul>
</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Meloxicam Tablet 7.5 Mg
<ul>
<li>Tiap tablet mengandung : Meloxicam 7.5 mg<br data-mce-bogus="1">
<ul>
<li>Dus, 2 strip @ 10 tablet</li>
</ul>
</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#642" title="KIT MIBI"><img src="/" alt="" height="125">	<br><br>
                            KIT MIBI</a>

                            <div id="642" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>KIT MIBI</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;RADIOFARMAKA DIAGNOSIS</p>
<ul>
<li>Tiap vial mengandung : Tetra (2- methoxyisobutyl isonitrile) Copper (1) tetraflouroborate 1 mg, SnCl2 2 H2O 0,1 mg, Sodium citrate dihydrate 2,6 mg, L-Cystein 1 mg
<ul>
<li>Dus, @ 5 vial</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#641" title="KIT MDP"><img src="/" alt="" height="125">	<br><br>
                            KIT MDP</a>

                            <div id="641" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>KIT MDP</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;RADIOFARMAKA DIAGNOSIS</p>
<ul>
<li>Tiap vial mengandung Acidum methylene diphosphonicum 10 mg' SnCl2 2 H2O 0,238 mg, Acidum ascorbicum 2 mg
<ul>
<li>Dus, @ 5 vial</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#640" title="KIT DTPA"><img src="/" alt="" height="125">	<br><br>
                            KIT DTPA</a>

                            <div id="640" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>KIT DTPA</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;RADIOFARMAKA DIAGNOSIS</p>
<ul>
<li>Tiap vial mengandung Pentasodium diethylene triamine pentaacetate 10 mg, SnCl2 H2O 0,8 mg
<ul>
<li>Dus, @ 5 vial</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#639" title="131I-MIBG"><img src="/" alt="" height="125">	<br><br>
                            131I-MIBG</a>

                            <div id="639" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>131I-MIBG</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;RADIOFARMAKA DIAGNOSIS</p>
<ul>
<li>Tiap vial mengandung: Larutan Na 131I 10-20 mCi; Metaiodobenzylguanidine (MIBG) sulphate 2 mg
<ul>
<li>Dus, @ 1 vial</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#638" title="HYDROCHLOROTHIAZIDE"><img src="/images/PRODUK/HIDROKLOROTIAZID.jpg" alt="" height="125">	<br><br>
                            HYDROCHLOROTHIAZIDE</a>

                            <div id="638" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/HIDROKLOROTIAZID.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>HYDROCHLOROTHIAZIDE</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;DIURETIK</p>
<ul>
<li>Tiap tablet mengandung : Hydrochlorothiazide 25 mg
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#637" title="HIDROKORTISON KRIM 2,5%"><img src="/" alt="" height="125">	<br><br>
                            HIDROKORTISON KRIM 2,5%</a>

                            <div id="637" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>HIDROKORTISON KRIM 2,5%</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Obat Kulit Kortocosteroid</p>
<ul>
<li>Tiap gram (Cream) mengandung : Hydrocortisone Acetate Micronized 0.025 g
<ul>
<li>Dus, 24 tube @ 5 gram</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#636" title="GLYCERIL GUAIACOLATE TABLET 100 MG"><img src="/" alt="" height="125">	<br><br>
                            GLYCERIL GUAIACOLATE TABLET 100 MG</a>

                            <div id="636" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>GLYCERIL GUAIACOLATE TABLET 100 MG</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;OBAT BATUK EKSPECTORAN</p>
<ul>
<li>Tiap tablet mengandung : Glyceril guaiacolat 100 mg
<ul>
<li>Botol plastik @ 100 tablet</li>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#635" title="ERGOTAMINE COFFEINE"><img src="/images/PRODUK/ERGOTAMINE-CAFEIN.jpg" alt="" height="125">	<br><br>
                            ERGOTAMINE COFFEINE</a>

                            <div id="635" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/ERGOTAMINE-CAFEIN.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ERGOTAMINE COFFEINE</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;MIGRAIN</p>
<ul>
<li>Tiap tablet mengandung : Ergotamine tartras 1 mg dan Coffeinum anhydrous 50 mg
<ul>
<li>Botol @ 100 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#634" title="DIAZEPAM"><img src="/images/PRODUK/DIAZEPAM.jpg" alt="" height="125">	<br><br>
                            DIAZEPAM</a>

                            <div id="634" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/DIAZEPAM.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>DIAZEPAM</h2>
									<p>KELAS TERAPI&nbsp; &nbsp; :&nbsp; &nbsp; PSIKOTROPIK</p>
<ul>
<li>Tiap tablet mengandung : Diazepam 2 mg
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
<li>Tiap tablet mengandung : Diazepam 2 mg
<ul>
<li>Botol Plastik @ 100 Tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#633" title="DEXAMETHASON"><img src="/images/PRODUK/DEXAMETHASONE.jpg" alt="" height="125">	<br><br>
                            DEXAMETHASON</a>

                            <div id="633" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/DEXAMETHASONE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>DEXAMETHASON</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Kortikosteroid sistemik</p>
<ul>
<li>Tiap tablet mengandung : Dexamethason 0,5 mg
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
<li>Tiap tablet mengandung : Dexamethason 0,5 mg
<ul>
<li>Botol plastik @ 100 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#632" title="CODEIN"><img src="/images/PRODUK/CODEIN-GAB-442.jpg" alt="" height="125">	<br><br>
                            CODEIN</a>

                            <div id="632" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CODEIN-GAB-442.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CODEIN</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;&nbsp;Antitusif-Analgesik Narkotik</p>
<ul>
<li>Tiap tablet mengandung : Codein fosfat hemihydrate setara Codein 10 mg
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Tiap tablet mengandung :&nbsp; Codein fosfat hemihydrate setara Codein 15 mg
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>Tiap tablet mengandung :&nbsp; Codein fosfat hemihydrate setara Codein 20 mg
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
<p>CODEINE 10</p>
<ul>
<li>Tiap tablet mengandung : Codein fosfat hemihydrate setara Codein 10 mg
<ul>
<li>Botol plastik 100 tablet (HDPE)</li>
</ul>
</li>
</ul>
<p>CODEINE 15</p>
<ul>
<li>Tiap tablet mengandung : Codein fosfat hemihydrate setara Codein 15 mg
<ul>
<li>Botol plastik 100 tablet (HDPE)</li>
</ul>
</li>
</ul>
<p>CODEINE 20</p>
<ul>
<li>Tiap tablet mengandung : Codein fosfat hemihydrate setara Codein&nbsp; 20 mg
<ul>
<li>Botol plastik 100 tablet (HDPE)</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#631" title="CLOPIDOGREL"><img src="/" alt="" height="125">	<br><br>
                            CLOPIDOGREL</a>

                            <div id="631" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>CLOPIDOGREL</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTIKOAGULAN</p>
<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap tablet mengandung : Clopidrogel 75 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;Dus, 3 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#630" title="CIMETIDINE"><img src="/images/PRODUK/CIMETIDINE.jpg" alt="" height="125">	<br><br>
                            CIMETIDINE</a>

                            <div id="630" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CIMETIDINE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CIMETIDINE</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTIULKUS PEPTIK</p>
<p>KOMPOSISI&nbsp; &nbsp; :&nbsp; &nbsp;&nbsp;Tiap tablet mengandung : Cimetidine 200 mg</p>
<p>KEMASAN&nbsp; &nbsp; :&nbsp; &nbsp;&nbsp;Dus, 10 strip @ 10 tablet</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#629" title="CHLORPROMAZINE HCL"><img src="/images/PRODUK/CHLORPROMAZINE-415.jpg" alt="" height="125">	<br><br>
                            CHLORPROMAZINE HCL</a>

                            <div id="629" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CHLORPROMAZINE-415.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CHLORPROMAZINE HCL</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;Antiulkus peptik</p>
<p>KOMPOSISI&nbsp; &nbsp;:&nbsp; &nbsp;Tiap tablet mengandung : Chlorpromazine 100 mg</p>
<p>KEMASAN&nbsp; &nbsp;:&nbsp; &nbsp;</p>
<ul>
<li>Dus, botol plastik @ 10 tablet salut selaput</li>
<li>Dus, 10 strip @ 10 tablet salut selaput</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#628" title="CHLOROQUINE"><img src="/images/PRODUK/CHLOROQUINE.jpg" alt="" height="125">	<br><br>
                            CHLOROQUINE</a>

                            <div id="628" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/CHLOROQUINE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>CHLOROQUINE</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTI MALARIA</p>
<p>Tiap tablet mengandung : Cetirizine 10 mg</p>
<ul>
<li>Dus, 3 strip @ 10 tablet</li>
<li>Botol plastik @ 100</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#627" title="CETIRIZINE HCL"><img src="/" alt="" height="125">	<br><br>
                            CETIRIZINE HCL</a>

                            <div id="627" class="content-details container">
                            		<div class="content-images"><img src="/" alt=""></div>
                                    <div class="content-text">
                                    <h2>CETIRIZINE HCL</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTIHISTAMIN</p>
<ul>
<li>Tiap tablet mengandung : Cetirizine 10 mg
<ul>
<li>Dus, 3 strip @ 10 tablet</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#626" title="BETAMETHASON VALERATE KRIM 0.1%"><img src="/images/PRODUK/BETAMETASONE.jpg" alt="" height="125">	<br><br>
                            BETAMETHASON VALERATE KRIM 0.1%</a>

                            <div id="626" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/BETAMETASONE.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>BETAMETHASON VALERATE KRIM 0.1%</h2>
									<p>Tiap gram mengandung :<br>Betametason valerat 1 mg</p>
<p>Dus, 25 tube @ 5 gram</p>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#625" title="AMBROXOL HCL"><img src="/images/PRODUK/AMBROXOL.jpg" alt="" height="125">	<br><br>
                            AMBROXOL HCL</a>

                            <div id="625" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/AMBROXOL.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>AMBROXOL HCL</h2>
									<ul>
<li>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;OBAT BATUK DAN INFLUENZA</li>
</ul>
<ul>
<li style="list-style-type: none;">
<ul>
<li>Tiap 5 ml sirup mengandung ambroxol HCl 15 mg
<ul>
<li>Botol @ 60 ml</li>
</ul>
</li>
</ul>
</li>
</ul>
<p>&nbsp;</p>
<ul>
<li>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;MUKOLITIK
<ul>
<li>
<p>Tiap tablet mengandung :<br>Ambroxol 30 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->

			<div class="col-md-4">

							<a class="fancybox" href="#624" title="ACYCLOVIR"><img src="/images/PRODUK/ACYCLOVIR-400.jpg" alt="" height="125">	<br><br>
                            ACYCLOVIR</a>

                            <div id="624" class="content-details container">
                            		<div class="content-images"><img src="/images/PRODUK/ACYCLOVIR-400.jpg" alt=""></div>
                                    <div class="content-text">
                                    <h2>ACYCLOVIR</h2>
									<p>KELAS TERAPI&nbsp; &nbsp;:&nbsp; &nbsp;ANTIVIRUS</p>
<ul>
<li>
<p>Tiap gram mengandung :<br>Acyclovir 50 mg</p>
<ul>
<li>Dus, 25 tube @ 5 gram</li>
</ul>
</li>
<li>
<p>Tiap tablet mengandung :<br>Acyclovir 200 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet</li>
</ul>
</li>
<li>
<p>Tiap tablet mengandung :<br>Acyclovir 400 mg</p>
<ul>
<li>Dus, 10 strip @ 10 tablet<br><br></li>
</ul>
</li>
</ul>
                                    </div>
                            </div>
			</div><!-- end span -->
		    	</div>


			<div class="cat-children">

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

  <script src="{{asset('assets/pharma/js/main.js')}}"></script>

</body>

</html>
