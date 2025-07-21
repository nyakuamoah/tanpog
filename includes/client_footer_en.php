
    <footer class="row fullwidth">
        
        <div class="col-md-6 menu-footer padding-1">
          Customer Care: <br />
          <a href="phone">phone number here 1</a> / <a href="phone">phone number here 2</a><br />
          <a href="mailto:tanpog@creadar.com">tanpog@creadar.com</a><br /><br />
          <a href="clientlogout.php">LOG OUT</a>
        </div>

        <div class="col-md-6 menu-footer padding-1 footer-nav">
          <a href="<?php
                     if ($activePage=="bodycare" || $activePage=="cleaners"){
                        if ($activePage=="bodycare"){
                          echo "faqbodycare.php";
                        } else {
                          echo "faqcleaners.php";
                        }
                     } else {
                        echo "faqs.php";
                     }
                  ?>">FAQs</a><br />
          <a href="#">ABOUT US</a><br />
          <a href="contact.php">CONTACT US</a><br /><br />
          &copy;<?php echo date("Y") ?> Tanpog Ventures

        </div>
    </footer>