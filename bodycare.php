<?php 
require "includes/tanpog_header_en.php";
require "includes/tanpog_nav_en.php";
?>
    
    <style type="text/css">
      .t-brand, .text {color: #764C24;}
      footer, .bg-brand {background-color: #764C24;}
      .bg-highlight {background-color: #D5C9BD;}
      .carousel-indicators .active, .carousel-indicators li:hover, .carousel-indicators li.active {background-color: #764C24;}
      .menu1 .navbar-nav > .active > a, .menu2 .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {background-image: linear-gradient(90deg, #764C24, #764C24);}
      .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover, 
      .menu1 .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover,
      .menu2 .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {color: #764C24;}
      .sm_name {color: #764C24!important; }
    </style>

    <div class="row fullwidth top-padding">
      <div class="col-md-4 no-padding">
        
        <div class="no-padding section seq" style="background: url('img/tanpog_bodycare.jpg'); background-size:contain; background-repeat:no-repeat;">
          <img src="img/image.png" alt="" class="img-responsive">
        </div>
        <div class="padding-2 essential seq">
          <p class="padding-2">
            <span class="title">100% ORGANIC<br />SKINCARE & HAIRCARE PRODUCTS:<br /></span>
            <span class="t-brand">
            Shea butter, Coconut butter, Cocoa butter & Organic treatment formulations.
            </span>
          </p>

          <div class="sm_icons padding-2">
            <ul>
              <li><a title="Official Instagram Page" href="https://instagram.com/TanpogBodyCare" target="_blank"><img class="sm" src="img/icon_in_bodycare.svg"></a></li>
              <li><a title="Official Twitter Page" href="https://twitter.com/TanpogBodyCare" target="_blank"><img class="sm" src="img/icon_tw_bodycare.svg"></a></li>
              <li><span class="sm_name">@TanpogBodyCare</span></li>
            </ul>
          </div>

        </div>

      </div>

      <div class="col-md-8 no-padding">
        <div id="carousel-home" class="carousel slide carousel-fade">
          <div class="carousel-inner">      
              <div class="slide-home item" style="background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 100%), url('img/bodycare_sample_1.jpg'); background-size:cover; background-position:center center; background-repeat:no-repeat;" data-animation="animated fadeIn">
                <div class="slide-title" data-animation="animated fadeIn">100% Organic Products</div>
              </div>
             
              <div class="slide-home item" style="background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 100%), url('img/tanpog_banner.jpg');background-size:cover; background-position:center center; background-repeat:no-repeat;" data-animation="animated fadeIn">
                <div class="slide-title" data-animation="animated fadeIn">Body Care Services</div>
              </div> 
          </div>
          <div class="container-fluid container-indicators">
              <ol class="carousel-indicators">
                <li data-target="#carousel-home" data-slide-to="0"></li>
                <li data-target="#carousel-home" data-slide-to="1"></li>
              </ol>
          </div>
        </div><!-- /.carousel -->
      </div>
      
    </div>

    <div class="row fullwidth">
      <div class="padding-1 bg-brand t-white">
        PRICING:
      </div>
    </div>

    <div class="row fullwidth">
      <div class="bg-white">
        <span>
          <a class="product-info padding-1 bodycare-section bg-highlight" data-toggle="collapse" href="#offer1" aria-expanded="true" aria-controls="collapseExample">
           1. Skin Care Products &mdash; Shea butter, Coconut butter & Cocoa butter<span class="down-arrow">+</span>
          </a>
          <div id="offer1" class="collapse">
            <div class="col-md-4 padding-1">
              <p class="t-brand">SHEA BUTTER</p>
              <p>Available in 120ml & 250ml<br />
              120ml @ Gh¢3.00 / 250ml @ Gh¢5.00</p>
            </div>
            <div class="col-md-4 padding-1">
              <p class="t-brand">COCONUT BUTTER</p>
              <p>Available in 120ml & 250ml<br />
              120ml @ Gh¢3.00 / 250ml @ Gh¢5.00</p>
            </div>
            <div class="col-md-4 padding-1">
              <p class="t-brand">COCOA BUTTER</p>
              <p>Available in 120ml & 250ml<br />
              120ml @ Gh¢3.00 / 250ml @ Gh¢5.00</p>
            </div>
            <div class="col-md-12 padding-inline">
              <p class="t-brand">For Wholesale pricing, kindly email our customer care at <a href="mailto:tanpog@creadar.com">tanpog@creadar.com</a></p>
            </div>
          </div>
        </span>

        <span>
          <a class="product-info padding-1 bodycare-section bg-highlight" data-toggle="collapse" href="#offer2" aria-expanded="false" aria-controls="collapseExample">
            2. Hair Care Products <span class="down-arrow">+</span>
          </a>
          <div id="offer2" class="collapse">
            <div class="col-md-4 padding-1">
              <p class="t-brand">PRODUCT 1</p>
              <p>Available in 120ml & 250ml<br />
              120ml @ Gh¢3.00 / 250ml @ Gh¢5.00</p>
            </div>
            <div class="col-md-4 padding-1">
              <p class="t-brand">PRODUCT 2</p>
              <p>Available in 120ml & 250ml<br />
              120ml @ Gh¢3.00 / 250ml @ Gh¢5.00</p>
            </div>
          </div>
        </span>

      </div>
    </div>

<?php 
require "includes/tanpog_footer_en.php";
?>

    <!-- Scripts -->
    <script src="js/viewportchecker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>