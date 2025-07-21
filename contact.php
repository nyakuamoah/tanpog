<?php 
require "includes/contact_helper_en.php"; 
require "includes/tanpog_header_en.php"; 
require "includes/tanpog_nav_en.php";
?> 

    <div class="row fullwidth top-padding">
        <div id="content-infinite">         
          
          <div class="col-md-6 padding-1">

            <div class="col-md-4"></div>
            <div class="col-md-8 no-padding">Nothing excites us more than hearing from our consumers. If you have any commercial inquiry or suggestion, kindly email us using the form below for an accelerated feedback:<br /><br /></div>
            <div class="col-md-12 no-padding bg-highlight">
              <p>* 
              <span class="success"> <?php echo $status_success; ?></span>
              <span class="failure"> <?php echo $status_failure; ?></span>
              </p>
            </div
            
            <div class="col-md-12 padding-1">
              <form action="contact.php" method="post" class="wpcf7-form" onchange="updateInputClass()">
                  <br /><br />
                  <span class="wpcf7-form-control-wrap"><input id="mail-subject" name="subject" value="<?php echo $subject; ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject" type="text" autofocus validate></span><br>

                  <span class="wpcf7-form-control-wrap"><textarea name="message" cols="40" rows="2" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message" type="text"><?php echo $message; ?></textarea></span><br />
                          
                  <span class="wpcf7-form-control-wrap"><input id="sender-name" name="sender_name" value="<?php echo $sender_name; ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" type="text"></span><br />

                  <span class="wpcf7-form-control-wrap"><input name="sender_email" value="<?php echo $sender_email; ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" type="email"></span><br /><br />

                  <input value="Send" class="wpcf7-form-control wpcf7-submit" type="submit">
              
              </form>

            </div>
          </div>

          <div class="col-md-6 no-padding">
            <!--
            <div class="col-md-12 padding-2 block bg-brand t-white">
              <p>Lorem here no nonsence</p>
            </div>
            -->

            <div id="location" class="col-md-12 no-padding"></div>
          </div>
          


        </div>
    </div>
     
    <?php require "includes/tanpog_footer_en.php"; ?>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDudR6E6IOIeOCH1pon5bIOI6l3VeCKuro&sensor=false"></script>
    <script type="text/javascript" src="js/maps.js"></script>
 
    <script src="js/main.js"></script>
  </body>
</html>
