<?php 
require "./includes/tanpog_header_en.php";
require "./includes/tanpog_nav_en.php";
?>

    <div class="row fullwidth top-padding">
      
    <div class="col-md-12 no-padding">
        <div id="carousel-home" class="carousel slide carousel-fade">
          <div class="carousel-inner">      
              <div class="slide-home item" style="background: linear-gradient(rgba(227, 232, 228, 1), rgba(227, 232, 228, 1) 100%), url('img/image.png'); background-size:cover; background-position:center center; background-repeat:no-repeat;" data-animation="animated fadeIn">
                <div class="slide-title" data-animation="animated fadeIn"></div>
                <div class="slide-content essential"><p class="slide-text"> Dedicated to satisfying our consumers <br /> with premium quality products and services *</p></div>
              </div>
             
              <div class="slide-home item" style="background: linear-gradient(rgba(227, 232, 228, 0), rgba(227, 232, 228, 0) 100%), url('img/tanpog_banner.jpg'); background-size:cover; background-position:center center; background-repeat:no-repeat;" data-animation="animated fadeIn">
                <div class="slide-title" data-animation="animated fadeIn"></div>
                <div class="slide-content essential"></div>
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

      <div class="row fullwidth">
        <div class="col-md-12 padding-1">WHO WE ARE</div>
      </div>

      <div class="col-md-4 padding-inline">
        <p>We are company focused on delivering premium quality products and services in the area of cleaning and body care.</p>
        <p>Our brands, Tanpog Cleaners & Tanpog Body Care, are rapidly gaining recognition each day though the high level of consumer satisfaction delivered.</p><br />
        <p class="hidden-xs hidden-sm">TANPOG CLEANERS stands for:<br />
          Effective cleaning supplies and premise cleaning services.</p>

        <p class="hidden-xs hidden-sm">TANPOG BODY CARE stands for:<br />
          Organic skin and hair care.</p>
      </div>

      <a href="cleaners.php">
        <div class="col-md-4 no-padding cleaning-section section seq">
          <div class="no-padding" style="background: url('img/tanpog_cleaners.jpg'); background-size:contain; background-repeat:no-repeat;">
            <img src="img/image.png" alt="" class="img-responsive">
          </div>
          <div class="padding-3">
            <p class="title t-cleaners">EFFECTIVE CLEANING SUPPLIES & PREMISE CLEANING SERVICES</p>
            <p class="t-cleaners">learn more &rarr;</p>
          </div>
        </div>
      </a>

      <a href="bodycare.php">
        <div class="col-md-4 no-padding bodycare-section section seq">
          <div class="no-padding" style="background: url('img/tanpog_bodycare.jpg'); background-size:contain; background-repeat:no-repeat;">
            <img src="img/image.png" alt="" class="img-responsive">
          </div>
          <div class="padding-3">
            <p class="title t-bodycare">100% ORGANIC<br />SKINCARE & HAIRCARE PRODUCTS</p>
            <p class="t-bodycare">learn more &rarr;</p>
          </div>
        </div>
      </a>

    </div>

<?php 
require "includes/tanpog_footer_en.php";
?>

    <!-- Scripts -->
    <script src="js/viewportchecker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
