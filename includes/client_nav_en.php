    <nav class="navbar navbar-default menu1">
      <div class="fullwidth menu-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
          </button>

          <a href="index.php" class="navbar-brand">
            <img alt="Tanpog Ventures" src="img/tanpog-ventures-logo.svg" width="100" height="65">
          </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar1">
          <ul class="nav navbar-nav navbar-right"> 
            <li class="<?= ($activePage == 'client') ? 'active':''; ?>"><a href="client.php">CLIENT: <?php echo $_SESSION['username']; ?></a></li>
            <li class="<?= ($activePage == 'clientlogout') ? 'active':''; ?>"><a href="clientlogout.php">LOG OUT</a></li>
            <!--
            <li>
              <ul class="lang">
                <li>
                  <div id="google_translate_element"></div>
                  <script type="text/javascript">
                    function googleTranslateElementInit() {
                      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,en,fr,nl,sv,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
                    }
                  </script>
                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </li>
              </ul>
            </li>
            -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <nav class="navbar navbar-default navbar-fixed-top menu2">
      <div class="fullwidth menu-container">
        <div class="navbar-header">
          
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>

          <a href="index.php" class="navbar-brand">
            <img alt="Tampog Ventures" src="img/tanpog-ventures-logo.svg" width="100" height="65">
          </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar2">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?= ($activePage == 'client') ? 'active':''; ?>"><a href="client.php">CLIENT: <?php echo $_SESSION['username']; ?></a></li>
            <li class="<?= ($activePage == 'clientlogout') ? 'active':''; ?>"><a href="clientlogout.php">LOG OUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
