<!DOCTYPE html>
<html lang="de">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Walking Death | GAME OVER Escape Rooms</title>
  <meta name="keywords" content="" />
  <meta name="description" content="Walking Death |  TZwei Jahre sind seit Beginn der Apokalypse vergangen.
    Die Menschheit ist vom Aussterben bedroht, aber es gibt immer noch Überlebende,
    die nach Schutz suchen, um sich vor den Zombies zu verstecken.">
  <meta property="og:locale" content="de_DE" />
  <meta property="og:locale:alternate" content="el_GR" />
  <meta property="og:locale:alternate" content="fr_FR" />
  <meta property="og:locale:alternate" content="en_GB" />
  <meta property="og:locale:alternate" content="it_IT" />
  <meta property="og:locale:alternate" content="es_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Walking Death | GAME OVER Escape Rooms" />
  <meta property="og:url" content="https://www.escapegameover.com/de/rooms/walking-death.php" />
  <meta property="og:site_name" content="GAME OVER Escape Rooms " />
  <meta property="og:image" content="https://www.escapegameover.com/img/fb-logo.png" />
  <meta property="og:image:secure_url" content="https://www.escapegameover.com/img/fb-logo.png" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="GAME OVER Escape Rooms " />
  <meta name="twitter:image" content="https://www.escapegameover.com/img/fb-logo.png" />
  <link rel="shortcut icon" href="../../img/gameover_favicon.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/final_style.min.css" rel="stylesheet">
  <link href="../../css/rooms_bootstrap.min.css" rel="stylesheet">

  <style>
    .room-walking {
      position: relative;
    }

    .room-walking::after {
      content: "";
      background: url("../../img/room_slider_images/walking_death (1).jpg") no-repeat center center;
      opacity: 0.2;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: -1;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
    }
  </style>
  <script type="text/javascript">
    function validateEmail(email) {
      var re = /[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/;
      return re.test(email);
    }

    function validateFormOld() {
      $("#result").text("");
      $("#result").css("font-size", "13px");
      $("#result").css("font-style", "italic  ");
      $("#result").css("color", "white");
      var textbox = document.getElementById("message");
      if (textbox.value.length <= 15) {
        $("#result").text("MESSAGE IS TOO SHORT");
        return false;
      }
      var email = $("#email").val();
      if (validateEmail(email) == false) {
        $("#result").text(email + " IS NOT VALID ");
        return false;
      }
      $("#submit").bind("click", "submit");

    }
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87676239-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-87676239-1');
  </script>
</head>

<body id="page-top">
  <div class="container-fluid nav-container p-0 fixed-top" style="">
    <?php include '../../inc/lang-logo.php'; ?>
    <?php include '../../inc/de-menu-tabs.php'; ?>
    <div class="burger-flag" style="">
      <div class="burger-container  ">
        <button id="burger" class="navbar-toggler hamburger  hamburger--vortex p-0" type="button" style="" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="hamburger-box">
            <span class="hamburger-inner "></span>
          </span>
        </button>
      </div>
      <div class="dropup-container" style="margin-top:-2px;">
        <div class="dropup" style="">
          <img class="dropbtn" style="width:25px;" src="../../img/flags/select.svg" alt="select a language">
          <div class="dropup-content text-center">
          </div>
        </div>
        <div id="mySidenav" class="sidenav nav navbar-nav" style="overflow:hidden;">
          <button class="closebtn">&times;</button>
          <p class="text-center" style="color:white;font-size:17px;margin:25px 0;font-weight:300;width:100%;">CHOOSE LANGUAGE</p>
          <div class="" style="display: flex;justify-content: center;align-items: center;padding-bottom:40px;font-size:13px;">
            <ul class="text-left">
              <div class="lang">
                <img style="border-radius:50%;align-self: center;width:13px;" src="../../img/flags/en.svg" alt="GAME OVER - English">
                <a href="../../rooms/walking-death.php">English</a>
              </div>
              <div class="lang">
                <img style="border-radius:50%;align-self: center;width:13px;" src="../../img/flags/gr.svg" alt="GAME OVER - Greek">
                <a style="align-items:center;" href="../../gr/rooms/walking-death.php">Greek</a>
              </div>
              <div class="lang">
                <img style="border-radius:50%;align-self: center;width:13px;" src="../../img/flags/it.svg" alt="GAME OVER - Italian">
                <a href="../../it/rooms/walking-death.php">Italian</a>
              </div>
              <div class="lang">
                <img style="border-radius:50%;align-self: center;width:13px;" src="../../img/flags/fr.svg" alt="GAME OVER - French">
                <a href="../../fr/rooms/walking-death.php">French</a>
              </div>
              <div class="lang">
                <img style="border-radius:50%;align-self: center;width:13px;" src="../../img/flags/es.svg" alt="GAME OVER - Spanish">
                <a href="../../es/rooms/walking-death.php">Spanish</a>
              </div>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div> <!-- end of container fluid -->
  <!-- carousel -->
  <?php include '../../inc/carousel-walking-death.php'; ?>
  <!-- end of carousel -->
  <section class="container-fluid room-walking text-center " id="mainsect">
    <div class="blur-div-2"></div>
    <div class="info-container" style="">
      <div id="rooms" style="display: flex;align-items: center;justify-content:center;padding-top:50px;">
        <img src="../../img/svg/walking_death.svg" classs="img-fluid" alt="" style="width: 5rem;height:5rem;">
        <h1 style="display:inline-block;line-height:5rem;font-size:3rem;">WALKING DEATH</h1>
      </div>
      <p class="room-desc" style="">Zwei Jahre sind seit Beginn der Apokalypse vergangen. <br>
        Die Menschheit ist vom Aussterben bedroht, aber es gibt immer noch Überlebende, <br>
        die nach Schutz suchen, um sich vor den Zombies zu verstecken
      </p>
      <section class="icon-section">
        <div class="left-icon"></div>
        <div class="room-icon" style="">

          <div class="small-box text-center" style="">
            <img src="../../img/menus_logo/scenarios.svg" alt="CATEGORY" width="30px">
            <p>CATEGORY</p>
            <p class="pdesc">Horror</p>
          </div>

          <div class="small-box text-center" style="">
            <img src="../../img/menus_logo/players.svg" alt="number of players" width="30px">
            <p>NUMBER OF <br>PLAYERS</p>
            <p class="pdesc">2-6</p>
          </div>

          <div class="small-box text-center" style="">
            <img src="../../img/menus_logo/duration.svg" alt="duration" width="30px">
            <p>DURATION</p>
            <p class="pdesc">60'</p>
          </div>

          <div class="small-box text-center" style="">
            <img src="../../img/menus_logo/space.svg" alt="suggested space" width="30px">
            <p>SUGGESTED <br> SPACE</p>
            <p class="pdesc">55m<sup>2</sup></p>
          </div>

          <div class="small-box text-center" style="">
            <img src="../../img/menus_logo/puzzle.svg" alt="Puzzles and riddles" width="30px">
            <p>PUZZLES / <br>RIDDLES</p>
            <p class="pdesc">15</p>
          </div>

        </div>
        <div class="right-icon"></div>
      </section>
      <img src="../../img/menus_logo/quote.svg" alt="" style="margin:30px;height:3rem;width:3rem;">
      <p class=" story" style="">Dein Team hat die Hölle überlebt und muss nicht nur gegen die Toten,
        sondern auch gegen die feindlichen menschlichen Zellen kämpfen. Vor einer Woche hast du dieses verlassene Gefängnis gefunden.
        Du hattest Glück beim Eliminieren der wenigen Zombies, die da drin steckten. Jetzt versuchst du eine Siedlung zu errichten,
        Befestigungen zu reparieren und jeden Sektor Schritt für Schritt zu erkunden. Heute ist es Sektor 3, der Isolationssektor ist dein Ziel...</p>
    </div>
    <div class="progress-container mt-5 pb-5 " style="text-align:right;">
      <div class="div1" style="height:20px;">
        <p class="percent" style="display:inline-block;">80%</p><br>
      </div>
      <div class="progress" style="">
        <div class="progress-bar" role="progressbar" style="width: 0%; background-color:#da1a35;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="diff-lvl" style="height:20px;">
        <p style="">DIFFICULTY LEVEL</p>
      </div>
    </div>
  </section>
  <?php include '../../inc/footer.php'; ?>
  <?php include '../../inc/de-contact-form.php'; ?>
  <script src="../../js/jquery.min.js"></script>
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script>
    var divs1 = document.querySelectorAll("img.dropbtn,.burger-container,.logo-container,.card1,footer,#carouselExampleFade,#mainsect,#click");
    var divsblur = document.querySelectorAll(".nav-container,footer,#carouselExampleFade,#mainsect");
  </script>
  <script src="../../js/js_all.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendor/bootstrap/js/popper.min.js"></script>
  <script src="../../rooms/boot-custom.js"></script>
  <!-- Custom scripts for this template -->
  <script src="../../js/progress_bar_walking_death.js"></script>
</body>

</html>