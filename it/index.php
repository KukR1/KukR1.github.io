<!DOCTYPE html>
<html lang="it">

<head>
   <!-- Analytics -->
   <?php include 'gtmHead.php' ?>
   <?php include 'fbPixel.php' ?>
   <!-- End of Analytics -->

   <meta charset="utf-8">
   <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  -->
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

   <title>GAME OVER Escape Rooms </title>
   <meta name="keywords" content="" />
   <meta name="description" content="We design and build premium quality, themed escape games all over the world. You can choose from our portfolio, or ask for your own scenario. We offer last generation solutions, top quality decoration scenes embeded with cutting edge technologies. ">
   <meta property="og:locale" content="" />
   <meta property="og:locale:alternate" content="" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="GAME OVER Escape Rooms" />
   <meta property="og:url" content="https://www.escapegameover.com/" />
   <meta property="og:site_name" content="GAME OVER Escape Rooms " />
   <meta property="og:image" content="https://www.escapegameover.com/img/fb-logo.png" />
   <meta property="og:image:secure_url" content="https://www.escapegameover.com/img/fb-logo.png" />
   <meta name="twitter:card" content="summary" />
   <meta name="twitter:title" content="GAME OVER Escape Rooms " />
   <meta name="twitter:image" content="https://www.escapegameover.com/img/fb-logo.png" />

   <link rel="shortcut icon" href="../img/gameover_favicon.png" type="image/x-icon" />

   <!--
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
   <link href="../css/bootstrap-index.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
   <link href="../css/final_style.min.css" rel="stylesheet">
   <link href="../css/style.min.css" rel="stylesheet">
   <link href="../css/animate.min.css" rel="stylesheet">
   <style>
      .in-view {
         animation: zoomIn 2.5s;
      }
   </style>
   <script src="../js/modernizr-2.6.2.min.js"></script>

   <script src="../js/jquery.min.js"></script>
   <script src="../js/bodymovin.js"></script>
   <script>
      var scrollTop = $(window).scrollTop();
      if ($(window).width() >= 768) {
         if (scrollTop < 100) {

            width = 300;
            right = 20;
            marginTop = 0;
            // bottom=50;
         } else if (scrollTop < 200 && scrollTop >= 100) {
            width = 200;
            right = -105;
            marginTop = 65;
         } else {
            width = 100;
            right = -95;
            marginTop = 105;
         }
      } else {
         if (scrollTop < 100) {
            width = 150;
            right = 0;
            marginTop = 0;
         } else if (scrollTop < 200 && scrollTop >= 100) {
            width = 100;
            right = -52;
            marginTop = 65;
         } else {
            width = 100;
            right = -95;
            marginTop = 65;
         }
      }

      $('#cube_banner').css({
         'width': width + "px"
      });
      $('#cube_banner').css({
         'right': right + "px"
      });
      $('#cube_banner').css({
         'margin-top': marginTop + "px"
      });


      setTimeout(() => {

         var animation = bodymovin.loadAnimation({
            container: document.getElementById('cube_banner'),
            renderer: 'svg',
            speed: 1,
            loop: false,
            autoplay: true,
            path: 'cube_reference.json',

         })
      }, 1000);

      //  if ($(window).width() < 812 && $(window).height() < 500) {
      //  setTimeout(function () {
      //              $("video source").each(function () {
      //                  var sourceFile = $(this).attr("data-src");
      //                  $(this).attr("src", sourceFile);
      //                  var video = this.parentElement;
      //                  video.controls = true;
      //                  video.load();
      //                  video.play();

      //              });
      //          }, 2000);


      //      }
      if ($(window).width() < 768) {
         setTimeout(function() {
            $("video source").each(function() {
               //   var new = $(this).attr("data-src");
               //   new.src = "/pathTo/newVideo.mp4";
               //   $(this).attr("src", sourceFile);
               var sourceFile = "../img/home_page/home_mobile.mp4";
               $(this).attr("src", sourceFile);
               var video = this.parentElement;
               video.load();
               video.play();


            });
         }, 2000);
      } else {
         setTimeout(function() {
            $("video source").each(function() {
               var sourceFile = "../img/home_page/home_desktop.mp4";
               $(this).attr("src", sourceFile);
               var video = this.parentElement;
               video.load();
               video.play();
            });
         }, 2000);
      }
      if (/iPhone/i.test(navigator.userAgent)) {
         setTimeout(function() {
            $("video source").each(function() {
               //   var new = $(this).attr("data-src");
               //   new.src = "/pathTo/newVideo.mp4";
               //   $(this).attr("src", sourceFile);
               var sourceFile = "../img/home_page/home_mobile.mp4";
               $(this).attr("src", sourceFile);
               var video = this.parentElement;
               video.load();
               video.play();
               //   video.controls = true;


            });
         }, 2000);

      }




      $(document).ready(function() {

         $(window).on('resize', function() {

            // if($(window).width() >= 768){
            //     $('video')[0].play();  // sessionStorage.setItem('advertOnce','false');
            // }
         });
         $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            if ($(window).width() >= 768) {
               if (scrollTop < 100) {

                  width = 300;
                  right = 20;
                  marginTop = 20;
                  // bottom=50;
               } else if (scrollTop < 200 && scrollTop >= 100) {
                  width = 200;
                  right = -105;
                  marginTop = 65;
               } else {
                  width = 100;
                  right = -100;
                  marginTop = 105;
               }
            } else {
               if (scrollTop < 100) {
                  width = 150;
                  right = 0;
                  marginTop = 0;
               } else if (scrollTop < 200 && scrollTop >= 100) {
                  width = 100;
                  right = -52;
                  marginTop = 65;
               } else {
                  width = 100;
                  right = -100;
                  marginTop = 65;
               }
            }

            $('#cube_banner').css({
               'width': width + "px"
            });
            $('#cube_banner').css({
               'right': right + "px"
            });
            $('#cube_banner').css({
               'margin-top': marginTop + "px"
            });
         })
      });
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
      <?php include '../inc/logo.php'; ?>
      <?php include '../inc/it-out-of-folder-menu-tabs.php'; ?>
      <div class="burger-flag" style="">
         <div class="burger-container  ">
            <button id="burger" class="navbar-toggler hamburger  hamburger--vortex p-0" type="button" style="" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="hamburger-box">
                  <span class="hamburger-inner "></span>
               </span>
            </button>
         </div>
         <div class="dropup-container">
            <div class="dropup" style="" onclick="openNav()">
               <img class="dropbtn" style="width:25px;" src="../img/flags/select.svg" alt="Select a language">
               <div class="dropup-content text-center">

               </div>
            </div>

            <div id="mySidenav" class="sidenav nav navbar-nav" style="overflow:hidden;">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>

               <p class="text-center" style="color:white;font-size:17px;margin:25px 0;font-weight:300;width:100%;">CHOOSE LANGUAGE</p>
               <div class="" style="display: flex;justify-content: center;align-items: center;padding-bottom:40px;font-size:13px;">
                  <ul class="text-left">
                     <div class="lang">
                        <img style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/en.svg" alt="GAME OVER - English">
                        <a href="../index.php">English</a>
                     </div>
                     <div class="lang">
                        <img style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/gr.svg" alt="GAME OVER - Greek">
                        <a style="align-items:center;" href="../gr/index.php">Greek</a>
                     </div>
                     <div class="lang">
                        <img style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/de.svg" alt="GAME OVER - German">
                        <a href="../de/index.php">German</a>
                     </div>
                     <div class="lang">
                        <img style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/fr.svg" alt="GAME OVER - French">
                        <a href="../fr/index.php">French</a>
                     </div>
                     <div class="lang">
                        <img style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/es.svg" alt="GAME OVER - Spanish">
                        <a href="../es/index.php">Spanish</a>
                     </div>

                  </ul>
               </div>

            </div>

         </div>


      </div>

   </div> <!-- end of container fluid -->
   <a target="_blank" href="https://www.cubechallenges.com">

      <div id="cube_banner"> </div>
   </a>

   <section id="main1" class="background-section" style="">
      <video style="z-index:0;" id="bgvid " autoplay playsinline muted loop>
         <source src="" type="video/mp4 ">
      </video>
      <video style="z-index:0;" id="bgvid_mob " playsinline muted loop>
         <source src="" type="video/mp4 ">
      </video>
   </section>


   <section id="sect1" class=" container-fluid text-center">
      <div class="second-box">
         <img src="../img/menus_logo/aboutus.svg" alt="VENITE CON NOI" style="width:45px;height:45px;">
         <h2>VENITE CON NOI</h2>
         <div class="paragraph-container">
            <p class="fade1 fadeIn animated">esperienza affascinante, scene di alta qualità, tecnologie all'avanguardia, enigmi e puzzle unici.</p>
            <p class="fade2 fadeIn animated inv">GAME OVER Escape Rooms progetta
               e crea giochi di fuga a tema di alta qualità.
               Il nostro obiettivo è un'esperienza di gioco affascinante e realistica, in quanto combiniamo scene di alta qualità con tecnologie all'avanguardia
               ed enigmi e puzzle unici collegati alla trama
               Inoltre, i nostri servizi di marketing "new age"
               vi aiuterannoa tenere alto il livello della vostra attività. Grazie alla continua ricerca mirata
               all'innovazione nel nostro settore, alla qualità
               dei nostri prodotti e al nostro speciale piano di marketing, GAME OVER Escape Rooms è una delle principali società di giochi di fuga in tutto il mondo.</p>



         </div>
         <div class="text-center" style="margin:10px 0;">
            <button type="button" name="button" id="btn1" style="font-size: 1rem;font-weight: 600;letter-spacing: -0.01rem;background: transparent;color: white;border: transparent;"><span class="fade1">Learn more</span><span class="fade2 inv">Close</span><span style="position: relative;left: 0.4rem;">&gt;</span></button>
         </div>

      </div>
      <div class="blur-div"></div>
   </section>
   <section id="sect2" class="container-fluid text-center">
      <div class="second-box">
         <img src="../img/menus_logo/search.svg" alt="SULLE STANZE DI FUGA" style="width:45px;height:45px;">
         <h2>
            SULLE STANZE DI FUGA</h2>
         <div class="paragraph-container">
            <p class="fade1 fadeIn animated">il trend mondiale nell'intrattenimento <br>
            </p>
            <p class="fade2 fadeIn animated inv">ESCAPE ROOMS sono giochi interattivi,
               davvero affascinanti ch vi permettono di assumere un ruolo in base allo scenario.L'obiettivo del gioco è risolvere una serie
               di enigmi, trovare oggetti nascosti e
               indizi in modo che i giocatori possano risolvere
               il mistero e fuggire dalla stanza per tempo.
               Gli ESCAPE GAMES sono diventati negli ultimi anni
               una tendenza mondiale dell'intrattenimento, con i cosiddetti escape gamers, fan appassionati di questi giochi, che li integrano nella loro attività quotidiana di intrattenimento.</p>
         </div>
         <div class="text-center" style="margin:10px 0;">
            <button type="button" id="btn2" name="button2" style="font-size: 1rem;font-weight: 600;letter-spacing: -0.01rem;background: transparent;color: white;border: transparent;"><span class="fade1">Read more</span><span class="fade2 inv">Close</span><span style="position: relative;left: 0.4rem;">&gt;</span></button>
         </div>

      </div>
      <div class="blur-div"></div>
   </section>

   <section id="sect3">
      <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(../img/event.jpg);" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="colorlib-narrow-content">
            <div class="row">
            </div>
            <div class="row">
               <div class="col-md-3 text-center animate-box">
                  <span class="colorlib-counter js-counter" data-from="0" data-to="350" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="colorlib-counter-label">Escape<br>Rooms</span>
               </div>
               <div class="col-md-3 text-center animate-box">
                  <span class="colorlib-counter js-counter" data-from="0" data-to="86" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="colorlib-counter-label">Cities</span>
               </div>
               <div class="col-md-3 text-center animate-box">
                  <span class="colorlib-counter js-counter" data-from="0" data-to="4507572" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="colorlib-counter-label">Escapers</span>
               </div>
               <div class="col-md-3 text-center animate-box">
                  <span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="colorlib-counter-label">GAME OVER <br> STORES</span>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="  container-fluid text-center" id="scenarios">
      <img src="../img/menus_logo/scenarios.svg" alt="SCENARIOS" style="width:45px;height:45px;">
      <h2>SCENARIOS</h2>
      <div id="mobile" class="text-center mb">
         <a class=" ">
            <img src="../img/PREVIEW.jpg" alt="" style="width:100%;">
         </a>
      </div>
      <div id="gallery" class="hideg">
         <ul class="nav nav-tabs justify-content-center " id="myTab" role="tablist">
            <li class="nav-item active">
               <a class="nav-link " id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">see all <span style="position:relative;left:8px;"> &gt;</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="profile-tab" data-toggle="tab" href="#era" role="tab" aria-controls="profile" aria-selected="false">new era<span style="position:relative;left:8px;"> &gt;</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link hide" id="close-tab" href="#scenarios" onclick="closeNav()">close<span style="position:relative;left:8px;"> &gt;</span></a>
            </li>
         </ul>
         <div class="tab-content" id="myTabContent" style="overflow:hidden;">
            <div class="tab-pane animated  fadeIn show active" id="all" role="tabpanel" aria-labelledby="home-tab">
               <section id="senaria" class="content-section container-fluid" style="margin:0 auto;">
                  <!-- ROW -->
                  <div class="row">
                     <div class="col-12 col-md-3">
                        <div class="image-box" title="">
                           <img class="img-fluid" src="../img/gallery_com/white-house.jpg" alt="White House">
                        </div>
                        <div href="rooms/white-house.php" title="">
                           <div class="image-info-container" style=" flex-direction:column;align-items:center;">
                              <div style="display: flex; flex-direction:column; align-items:center">
                                 <div style="display:flex;margin-top:20px;flex-wrap: wrap;justify-content:center;">
                                    <img style="" src="../img/svg/white-house.svg" alt="">
                                    <h3 style="text-align:left;display:flex;align-items:center;margin-left:10px;">WHITE<br />HOUSE</h3>
                                 </div><br />
                                 <div class="coming-soon">COMING SOON</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/jpeg" srcset="../img/gallery_com/dracula.jpg" media="(max-width: 767px)">
                              <img class="img-fluid" src="../img/gallery_com/dracula.jpg" alt="Dracula">
                           </picture>
                        </div>
                        <div href="rooms/dracula.php" title="">
                           <div class="image-info-container" style=" flex-direction:column;align-items:center;">
                              <div style="display: flex; flex-direction:column; align-items:center">
                                 <div style="display:flex;margin-top:20px;flex-wrap: wrap;justify-content:center;">
                                    <img style="" src="../img/svg/dracula.svg" alt="">
                                    <h3 style="text-align:left;display:flex;align-items:center;margin-left:10px;">DRACULA</h3>
                                 </div><br />
                                 <div class="coming-soon">COMING SOON</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-3">
                        <div class="image-box" title="">
                           <img class="img-fluid" src="../img/gallery_com/alice_in_wonderland.jpg" alt="Alice in Wonderland, Mushrooms!">
                        </div>
                        <div href="rooms/alice-in-wonderland.php" title="">
                           <div class="image-info-container" style=" flex-direction:column;align-items:center;">
                              <div style="display: flex; flex-direction:column; align-items:center">
                                 <div style="display:flex;margin-top:20px;flex-wrap: wrap;justify-content:center;">
                                    <img style="" src="../img/svg/alice.svg" alt="">
                                    <h3 style="text-align:left;display:flex;align-items:center;">ALICE IN<br> WONDERLAND</h3>
                                 </div><br />
                                 <div class="coming-soon">COMING SOON</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ROW -->
                  <div class="row">
                     <div class="col-12 col-md-6">
                        <div class="image-box" title="">
                           <img class="img-fluid" src="../img/gallery_com/illuminati.jpg" alt="Illuminati, third eye">
                           <source type="image/jpeg" srcset="../img/mobile_thumbs/illuminati.jpg" media="(max-width: 767px)">
                        </div>
                        <a href="rooms/illuminati.php" title="">
                           <div class="image-info-container" style=" flex-direction:column;align-items:center;">
                              <div style="display:flex;margin-top:20px;flex-wrap: wrap;justify-content:center;">
                                 <img style="" src="../img/svg/illuminati.svg" alt="">
                                 <h3 style="text-align:left;display:flex;align-items:center;">ILLUMINATI</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/circus.jpg" media="(max-width: 767px)">
                              <img class="img-fluid" src="../img/gallery_com/horror_circus.jpg" alt="Circus">
                           </picture>
                        </div>
                        <a href="rooms/horror-circus.php" title="">
                           <div class="image-info-container" style=" flex-direction:column;align-items:center;">
                              <div style="display:flex;margin-top:20px;flex-wrap: wrap;justify-content:center;">
                                 <img style="" src="../img/svg/circus.svg" alt="">
                                 <h3 style="text-align:left;display:flex;align-items:center;">HORROR<br> CIRCUS</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <!-- ROW -->
                  <div class="row">

                     <div class="col-12 col-md-6">
                        <div class="image-box" title="">


                           <img class="img-fluid" src="../img/gallery_com/mansion.jpg" alt="Haunted mansion living room">

                        </div>
                        <a href="rooms/haunted-mansion.php" title="">
                           <div class="image-info-container" style=" flex-direction:column;align-items:center;">
                              <div style="display:flex;margin-top:20px;">
                                 <img style="" src="../img/svg/mansion.svg" alt="">
                                 <h3 style="text-align:left;display:flex;align-items:center;">HAUNTED <br />MANSION</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/casa.jpg">
                              <img class="img-fluid" src="../img/gallery_com/casa.jpg" alt="Bank robbery mission">
                           </picture>
                        </div>
                        <a href="rooms/la-mision-del-profesor.php" title="">
                           <div class="image-info-container" style=" flex-direction:column;align-items:center;">
                              <div style="display:flex;margin-top:20px;">
                                 <img style="" src="../img/svg/la_mission.svg" alt="">
                                 <h3 style="text-align:left;display:flex;align-items:center;">LA MISIÓN DEL <br />PROFESOR</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-12 col-md-6">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/pirates_ext.webp">
                              <img class="img-fluid" src="../img/gallery_com/pirates_ext.jpg" alt="Pirate ship">
                           </picture>
                        </div>
                        <a href="rooms/queen-annes-revenge.php" title="">
                           <div class="image-info-container pirates_ext_tile" style="">
                              <img style="" src="../img/svg/piratesext_logo.svg" alt="">
                              <h3 style="">PIRATES<br><span>QUEEN ANNE'S REVENGE</span></h3>
                              <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                           </div>
                        </a>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/potter.webp">
                              <img class="img-fluid" src="../img/gallery_com/potter.jpg" alt="Harry Potter themed room">
                           </picture>
                        </div>
                        <a href="rooms/philosophers-stone.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/HARRY POTER.svg" alt="">
                              <h3 style="text-align:center;">PHILOSOPHER'S STONE</h3>
                           </div>
                        </a>
                     </div>

                  </div>


                  <div class="row">
                     <div class="col-12  col-md-3 " style="position:relative;">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/wd.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/wd.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/wd.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/wd.jpg" alt="Filled with blood shelter from zombies room">
                           </picture>
                        </div>
                        <a href="rooms/walking-death.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/walking_death.svg" alt="">
                              <h3 class="bg">WALKING <br class="display-items"> DEATH</h3>
                           </div>
                        </a>
                     </div>
                     <div class="col-12  col-md-9 ">
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-12  col-md-4 ">
                                 <div class="image-box" title="">
                                    <picture>
                                       <source type="image/webp" srcset="../img/gallery_com/arkham_sqr.webp" media="(min-width: 768px)">
                                       <source type="image/webp" srcset="../img/gallery_com/arkham.webp" media="(max-width: 769px)">
                                       <source type="image/jpeg" srcset="../img/gallery_com/arkham.jpg" media="(max-width: 769px)">
                                       <img class=" img-fluid" src="../img/gallery_com/arkham_sqr.jpg" alt="Arkham Penitentiaries prison">
                                    </picture>
                                 </div>
                                 <a href="rooms/arkham-penitentiaries.php" title="">
                                    <div class="image-info-container" style="">
                                       <img style="" src="../img/svg/ARKHAM PRISONS.svg" alt="">
                                       <h3 style="text-align:center;">ARKHAM PENITENTIARIES</h3>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12  col-md-8 ">
                                 <div class="image-box" title="">
                                    <picture>
                                       <source type="image/webp" srcset="../img/gallery_com/aztec.webp">
                                       <img class="img-fluid" src="../img/gallery_com/aztec.jpg" alt="Amazon forrest themed room">
                                    </picture>
                                 </div>
                                 <a href="rooms/aztec.php" title="">
                                    <div class="image-info-container" style="">
                                       <img style="" src="../img/svg/aztec.svg" alt="">
                                       <h3 style="text-align:center"><span>AZTEC EMPIRE</span><br> TEMPLE OF THE SKULL</h3>
                                       <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12  col-md-8 ">
                                 <div class="image-box" title="">
                                    <picture>
                                       <source type="image/webp" srcset="../img/gallery_com/space.webp">
                                       <img class="img-fluid" src="../img/gallery_com/space.jpg" alt="Spaceship control room">
                                    </picture>
                                 </div>
                                 <a href="rooms/space-wars.php" title="">
                                    <div class="image-info-container" style="">
                                       <img style="" src="../img/svg/space.svg" alt="">
                                       <h3 class="bg">SPACE WARS</h3>
                                       <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12  col-md-4 ">
                                 <div class="image-box" title="">
                                    <picture>
                                       <source type="image/webp" srcset="../img/gallery_com/maniac.webp" media="(min-width: 768px)">
                                       <source type="image/webp" srcset="../img/mobile_thumbs/maniac.webp" media="(max-width: 769px)">
                                       <source type="image/jpeg" srcset="../img/mobile_thumbs/maniac.jpg" media="(max-width: 769px)">
                                       <img class=" img-fluid" src="../img/gallery_com/maniac.jpg" alt="Wall with the incription 'I want to play a game' written with blood">
                                    </picture>
                                 </div>
                                 <a href="rooms/maniac.php" title="">
                                    <div class="image-info-container " style="">
                                       <img style="" src="../img/svg/maniac.svg" alt="">
                                       <h3 class="text-left maniac">MANIAC:<br><span id="maniac">I WANT TO PLAY A GAME</span></h3>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>



                  <div class="row">
                     <div class="col-12  col-md-9 ">
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-12  col-md-8 ">
                                 <div class="image-box" title="">
                                    <picture>
                                       <source type="image/webp" srcset="../img/gallery_com/ripper.webp">
                                       <img class="img-fluid" src="../img/gallery_com/ripper.jpg" alt="Medieval room with a window showing a suspicious figure">
                                    </picture>
                                 </div>
                                 <a href="rooms/jack-the-ripper.php" title="">
                                    <div class="image-info-container" style="">
                                       <img style="" src="../img/svg/jack.svg" alt="">
                                       <h3 class="bg">JACK <br> THE RIPPER</h3>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12  col-md-4 ">
                                 <div class="image-box" title="">
                                    <picture>
                                       <source type="image/webp" srcset="../img/gallery_com/tut.webp" media="(min-width: 768px)">
                                       <source type="image/webp" srcset="../img/mobile_thumbs/tut.webp" media="(max-width: 769px)">
                                       <source type="image/jpeg" srcset="../img/mobile_thumbs/tut.jpg" media="(max-width: 769px)">
                                       <img class=" img-fluid" src="../img/gallery_com/tut.jpg" alt="Egyptian themed room showing Tutankhamun with red eyes">
                                    </picture>
                                 </div>
                                 <a href="rooms/tutankhamuns-tomb.php" title="">
                                    <div class="image-info-container " style="">
                                       <img class="tut " src="../img/svg/tut.svg" alt="">
                                       <h3 class="tuth3" style="">TUTANKHAMUN'S <br> TOMB</h3>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12  col-md-4 ">
                                 <div class="image-box" title="">
                                    <picture>
                                       <source type="image/webp" srcset="../img/gallery_com/assassins.webp" media="(min-width: 768px)">
                                       <source type="image/webp" srcset="../img/mobile_thumbs/assassins.webp" media="(max-width: 769px)">
                                       <source type="image/jpeg" srcset="../img/mobile_thumbs/assassins.jpg" media="(max-width: 769px)">
                                       <img class=" img-fluid" src="../img/gallery_com/assassins.jpg" alt="Medieval iron knight statue">
                                    </picture>
                                 </div>
                                 <a href="rooms/order-of-assassins.php" title="">
                                    <div class="image-info-container" style="">
                                       <img style="" src="../img/svg/assassins.svg" alt="">
                                       <h3 style="">ORDER OF <br> ASSASSINS</h3>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-12  col-md-8 ">
                                 <div class="image-box" title="">
                                    <picture>
                                       <source type="image/webp" srcset="../img/gallery_com/top.webp">
                                       <img class="img-fluid" src="../img/gallery_com/top.jpg" alt="High security vault inside a prison room with laser beams">
                                    </picture>
                                 </div>
                                 <a href="rooms/top-secret.php" title="">
                                    <div class="image-info-container" style="">
                                       <img style="" src="../img/svg/top.svg" alt="">
                                       <h3 class="bg" style="">TOP<br class="display-items"> SECRET</h3>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12  col-md-3 ">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/got.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/got.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/got.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/got.jpg" alt="The iron throne from Game of Thrones">
                           </picture>
                        </div>
                        <a href="rooms/winter-is-coming.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/got.svg" alt="">
                              <h3 style="">WINTER<br> IS COMING</h3>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12  col-md-3 ">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/pirates.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/pirates.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/pirates.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/pirates.jpg" alt="A hanged skeleton wearing a pirate hat and holding a sword">
                           </picture>
                        </div>
                        <a href="rooms/pirates-of-caribbean.php" title="">
                           <div class="image-info-container " style="">
                              <img style="" src="../img/svg/pirates.svg" alt="">
                              <h3 style="">PIRATES<br> OF CARIBBEAN</h3>
                           </div>
                        </a>
                     </div>
                     <div class="col-12  col-md-6 ">
                        <div class=" col-12">
                           <div class="image-box" title="">
                              <picture>
                                 <source type="image/webp" srcset="../img/gallery_com/monte.webp">
                                 <img class="img-fluid" src="../img/gallery_com/monte.jpg" alt="Aztec temple">
                              </picture>
                           </div>
                           <a href="rooms/montezuma.php" title="">
                              <div class="image-info-container" style="">
                                 <img style="" src="../img/svg/montezuma.svg" alt="">
                                 <h3 style="">FORBIDDEN TEMPLE<br> OF MONTEZUMA</h3>
                              </div>
                           </a>
                        </div>
                        <div class="col-12">
                           <div class="image-box" title="">
                              <picture>
                                 <source type="image/webp" srcset="../img/gallery_com/necromancy.webp">
                                 <img class="img-fluid" src="../img/gallery_com/necromancy.jpg" alt="Creepy bloody ghost standing on a stair inside a house">
                              </picture>
                           </div>
                           <a href="rooms/necromancy.php" title="">
                              <div class="image-info-container end" style="">
                                 <img style="" src="../img/svg/necro.svg" alt="">
                                 <h3 class="bg" style="">NECROMANCY</h3>
                                 <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-12  col-md-3 ">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/phantazma.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/phantazma.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/phantazma.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/phantazma.jpg" alt="Knight holding a sword">
                           </picture>
                        </div>
                        <a href="rooms/phantazma.php" title="">
                           <div class="image-info-container " style="">
                              <img style="" src="../img/svg/phantazma.svg" alt="">
                              <h3 style="">PHANTAZMA - <br>MEDIEVAL CASTLE</h3>
                           </div>
                        </a>
                     </div>
                  </div>


                  <div class="row">
                     <div class='col-md-3 col-12'>
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/atlantis.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/atlantis.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/atlantis.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/atlantis.jpg" alt="Statue of Posidon">
                           </picture>
                        </div>
                        <a href="rooms/lost-city-of-atlantis.php" title="">
                           <div class="image-info-container " style="">
                              <img style="" src="../img/svg/atlantis.svg" alt="">
                              <h3 style="">LOST CITY <br> OF ATLANTIS</h3>
                           </div>
                        </a>
                     </div>
                     <div class='col-md-3 col-12'>
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/mino.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/mino.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/mino.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/mino.jpg" alt="Stone plate showing Minotaur">
                           </picture>
                        </div>
                        <a href="rooms/mino.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/mino.svg" alt="">
                              <h3>MINOTAUR'S<br> LABYRINTH</h3>
                           </div>
                        </a>
                     </div>
                     <div class='col-md-3 col-12'>
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/lodge.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/lodge.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/lodge.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/lodge.jpg" alt="Hunter's living room">
                           </picture>
                        </div>
                        <a href="rooms/hunters-lodge.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/lodge.svg" alt="">
                              <h3 class="bg" style="">HUNTER'S<br>LODGE</h3>
                           </div>
                        </a>
                     </div>
                     <div class='col-md-3 col-12'>
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/reactor.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/reactor.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/reactor.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/reactor.jpg" alt="Reactor room with danger signs">
                           </picture>
                        </div>
                        <a href="rooms/chernobyl.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/reactor.svg" alt="">
                              <h3 style="">CHERNOBYL</h3>
                           </div>
                        </a>
                     </div>





                  </div>
                  <div class="row">
                     <div class='col-md-3 col-12'>
                        <div class="image-box" title="">
                           <!-- THIS IS CHOCOLATE -->
                           <picture>


                              <source type="image/jpeg" srcset="../img/mobile_thumbs/choco.webp" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/choco_sqr.jpg" alt="Chocolate factory">
                           </picture>
                        </div>
                        <a href="rooms/chocolate-factory.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/chocolate.svg" alt="">
                              <h3 style="">CHOCOLATE <br>FACTORY</h3>
                           </div>
                        </a>
                     </div>
                     <div class="col-12  col-md-6 ">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/ripper_ext.webp">
                              <img class="img-fluid" src="../img/gallery_com/ripper_ext.jpg" alt="English phone booth situated in a foggy dark alley and man standing in the fog">
                           </picture>
                        </div>
                        <a href="rooms/jtr-the-revenge.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/jack.svg" alt="">
                              <h3>JACK <br> THE RIPPER <br><span id="revenge">THE REVENGE</span> </h3>
                              <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                           </div>
                        </a>
                     </div>
                     <div class="col-12  col-md-3 ">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/pow.webp" media="(min-width: 768px)">
                              <source type="image/webp" srcset="../img/mobile_thumbs/pow.webp" media="(max-width: 769px)">
                              <source type="image/jpeg" srcset="../img/mobile_thumbs/pow.jpg" media="(max-width: 769px)">
                              <img class=" img-fluid" src="../img/gallery_com/pow.jpg" alt="Arm camp with soldier helmets and guns">
                           </picture>
                        </div>
                        <a href="rooms/pow.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/pow.svg" alt="">
                              <h3>PRISONERS<br> OF WAR </h3>
                           </div>
                        </a>
                     </div>
                  </div>

               </section>
            </div>
            <div class="tab-pane animated fadeIn js-scroll-trigger" id="era" role="tabpanel" aria-labelledby="profile-tab">
               <section class="content-section container-fluid" style="margin:0 auto;">
                  <div class="row">
                     <div class="col-12  col-md-6 " style="position:relative;">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/pirates_ext.webp">
                              <img class="img-fluid" src="../img/gallery_com/pirates_ext.jpg" alt="Pirate ship">
                           </picture>
                        </div>
                        <a href="rooms/queen-annes-revenge.php" title="">
                           <div class="image-info-container pirates_ext_tile" style="">
                              <img style="" src="../img/svg/piratesext_logo.svg" alt="">
                              <h3 style="">PIRATES<br><span>QUEEN ANNE'S REVENGE</span></h3>
                              <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                           </div>
                        </a>
                     </div>
                     <div class="col-12  col-md-6 " style="position:relative;">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/ripper_ext.webp">
                              <img class="img-fluid" src="../img/gallery_com/ripper_ext.jpg" alt="English phone booth situated in a foggy dark alley and man standing in the fog">
                           </picture>
                        </div>
                        <a href="rooms/jtr-the-revenge.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/jack.svg" alt="">
                              <h3>JACK <br> THE RIPPER <br><span id="revenge">THE REVENGE</span> </h3>
                              <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                           </div>
                        </a>
                     </div>
                     <div class="col-12  col-md-6">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/necromancy.webp">
                              <img class="img-fluid" src="../img/gallery_com/necromancy.jpg" alt="Creepy bloody ghost standing on a stair inside a house">
                           </picture>
                        </div>
                        <a href="rooms/necromancy.php" title="">
                           <div class="image-info-container end" style="">
                              <img style="" src="../img/svg/necro.svg" alt="">
                              <h3 style="">NECROMANCY</h3>
                              <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                           </div>
                        </a>
                     </div>
                     <div class="col-12  col-md-6 ">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/aztec.webp">
                              <img class="img-fluid" src="../img/gallery_com/aztec.jpg" alt="Amazon forrest themed room">
                           </picture>
                        </div>
                        <a href="rooms/aztec.php" title="">
                           <div class="image-info-container" style="">
                              <img style="" src="../img/svg/aztec.svg" alt="">
                              <h3 style="text-align:center"><span>AZTEC EMPIRE</span><br> TEMPLE OF THE SKULL</h3>
                              <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                           </div>
                        </a>
                     </div>
                     <div class="col-12  col-md-6 ">
                        <div class="image-box" title="">
                           <picture>
                              <source type="image/webp" srcset="../img/gallery_com/space.webp">
                              <img class="img-fluid" src="../img/gallery_com/space.jpg" alt="Spaceship control room">
                           </picture>
                        </div>
                        <a href="rooms/space-wars.php" title="">
                           <div class="image-info-container" style="">
                              <img src="../img/svg/space.svg" alt="">
                              <h3>SPACE WARS</h3>
                              <img src="../img/newera.svg" alt="" style="width:32px;margin-left:10px;">
                           </div>
                        </a>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </section>



   <div id="map1target" style="height:1px;"></div>
   <!-- Map responsive and clickable -->
   <section id="map-section" class="content-section text-center" style="">
      <div id="info-box"></div>
      <div id="svg-desk" style="">
         <div class="map-box" style="">
            <img src="../img/menus_logo/clients.svg" alt="Our clients from around the world" style="width:45px;height:45px;">
            <h2>RETE</h2>

            <p>GAME OVER in tutto il mondo</p>

            <div class="text-center" style="margin:10px 0;">
               <a href="gallery.php" style="font-size: 1rem;font-weight: 600;letter-spacing: -0.01rem;background: transparent;color: white;border: transparent;">See all<span style="position: relative;left: 0.4rem;">&gt;</span></a>
            </div>

         </div>
         <?php include("../map_svg/map_com.svg"); ?>

      </div>
      <div id="svg-mobile" style="margin:0 auto;">
         <div class="map-box1">
            <img src="../img/menus_logo/clients.svg" alt="Map of countries where our escape rooms are located" style="width:45px;height:45px;">
            <h2>RETE</h2>

            <p>GAME OVER in tutto il mondo</p>

            <div class="text-center" style="margin:10px 0;">
               <a href="gallery.php" style="font-size: 1rem;font-weight: 600;letter-spacing: -0.01rem;pointer-events: all;background: transparent;color: white;border: transparent;">See all<span style="position: relative;left: 0.4rem;">&gt;</span></a>
            </div>

         </div>

         <?php include("../map_svg/map_mobile_com.svg"); ?>
      </div>


   </section>

   <!-- About Us  -->
   <section id="whatwedo" class="lazy container-fluid text-center">

      <div class="" style="display:flex;width:100%;align-items:center;justify-content:center;">
         <div class="third-box">
            <img src="../img/menus_logo/offer.svg" alt="" style="width:45px;height:45px;">
            <h2>COSA O<span style="margin-left:2px;">F</span>FRIAMO</h2>

            <p style="margin: 0 0 1.1rem;letter-spacing: 0.9px;">completa costruzione e attività di marketing</p>


         </div>
      </div>



      <div class="container-fluid whatwedo-container" style="">
         <div class=" text-center offer-box">
            <div class="">

            </div>
            <p>Progettiamo e realizziamo giochi di fuga a tema di qualità premium e all'avanguardia.</p>
         </div>
         <div class=" text-center offer-box">
            <a href="gallery.php">
               <div class="">

               </div>
            </a>
            <p>Siamo a disposizione in qualsiasi paese del mondo.</p>
         </div>
         <div class=" text-center offer-box">
            <a href="construction.php">
               <div class="">

               </div>
            </a>
            <p>Formiamo il vostro personale sul funzionamento dei giochi, forniamo manuali di gioco e manutenzione.</p>
         </div>
         <div class=" text-center offer-box">
            <div class="">

            </div>
            <p>In caso di domande, problemi o suggerimenti,
               è possibile chiamare o contattare tramite
               e-mail il nostro dipartimento di supporto online, 24 ore su 24.</p>
         </div>
         <div class=" text-center offer-box">
            <div class="">

            </div>
            <p>Aggiornamenti gratuiti: se non vi piace
               un trucchetto o un puzzle nel gioco, lo cambieremo.</p>
         </div>
         <div class=" text-center offer-box">
            <a href="autohelp.php">
               <div class="">

               </div>
            </a>
            <p>Auto Help Hint System è un sistema automatico
               di controllo e orientamento dei giocatori senza avere un Game Master responsabile del funzionamento di ogni stanza.</p>
         </div>
         <div class=" text-center offer-box">
            <div class="">

            </div>
            <p>Potete usare il vostro logo e la vostra denominazione commerciale oppure usare il marchio GAME OVER Escape Rooms e i kit di marketing</p>
         </div>
         <div class=" text-center offer-box">
            <div class="">

            </div>
            <p>Aderendo ai nostri servizi di marketing
               avrete a vostra disposizione un supporto informatico ed artistico illimitato e
               dedicato.</p>
         </div>
      </div>

      <div id="get_quote" class="text-center" style="width: 100%;display: block;margin: 2rem 0px;">
         <p style="font-size:1rem;font-weight:600;letter-spacing: -0.5px;cursor:pointer;">Get a Quote<span style="position:relative;left:8px;"> &gt;</span></p>
      </div>
   </section>
   <footer class="" style="margin-bottom:40px;">
      <section class="footer1 content-section">

         <!--<div class="site-structure">-->
         <div class="ul-container" style="display:flex;    width: 100%;">
            <div class="footer-flex" style="">
               <div class="footer-logo">
                  <a class="js-scroll-trigger" href="index.php">
                     <img src="../img/logo.png" alt="Escape GameOver Logo" style="width: 50px;height: 50px;margin:20px 0px;">
                  </a>


               </div>
               <ul class="company1" style="text-align:right;">
                  <li class="site-li-header">VENITE CON NOI</li>
                  <li><a href="../company/presentation.pdf" download>Company Presentation </a></li>
                  <li><a href="statements.html">Financial Statements </a></li>
                  <li><a href="terms.html">Terms and Conditions </a></li>
                  <li><a href="team.php">Our Company</a></li>
                  <li><a href="construction.php">Construction </a></li>



               </ul>
            </div>
            <div class="footer-flex2" id="foot-dest">
               <ul class="contact1" style="text-align:left;">
                  <li class="site-li-header">CONTATTI</li>
                  <li>Address: Megalou Alexandrou 55,<br> Argyroupoli, Attica, Greece</li>
                  <li>Postal Code: 16452</li>
                  <li>Phone: (+30) 210 – 9370493</li>
                  <li>E-Mail: info@escapegameover.com</li>


               </ul>
            </div>


         </div>

         <div class="ul-container" style="display:flex;width: 100%;">
            <div class="footer-flex" style="border-bottom: none;">
               <div class="footer-logo">

               </div>
               <ul class="company1" style="text-align:right;">

            </div>
            <div class="footer-flex2" id="foot-dest">
               <ul class="contact1" style="text-align:left;">
                  <li class="site-li-header" style="margin-top:5vh;">MEMBER OF</li>
                  <li> <a target="_blank" rel="noopener noreferrer" href="https://www.iaapa.org/"><img src="../img/iapa.png" style="width:60%; height:auto;" alt="IAAPA LOGO"></a> </li>

               </ul>
            </div>
         </div>


         <div class="text-center footer3">
            <div class="links-container">
               <a href="https://www.facebook.com/gameoverescaperooms/">
                  <img src="../img/svg_social_icons/facebook.svg" alt="facebook page">
               </a>
               <a href="https://twitter.com/GameOverEscRoom">
                  <img src="../img/svg_social_icons/twitter.svg" alt="twitter page">
               </a>
               <a href="https://www.instagram.com/escape_game_over/">
                  <img src="../img/svg_social_icons/instagram.svg" alt="Instagram page">
               </a>

               <a href="https://www.youtube.com/channel/UC1U-qoOY1FYBJQu046e3L0g">
                  <img src="../img/svg_social_icons/youtube.svg" alt="Youtube channel">
               </a>
               <a href="https://www.pinterest.com/iordanispapadop/game-over-escape-rooms/">
                  <img src="../img/svg_social_icons/pinterest.svg" alt="Pinterest page">
               </a>
            </div>

         </div>



         <!--	</div> -->
      </section>






      <?php include '../inc/footer.php'; ?>
      <?php include '../inc/it-contact-form.php'; ?>
      <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

      <script>
         if (screen && $(window).width() > 500) {
            document.write('<script type="text/javascript" src="../js/myscroll.js"><\/script>');
         }
      </script>
      <script>
         $(".p").hover(
            function() {
               $(".p").addClass("pulse");
            },
            function() {
               $(".p").removeClass("pulse");
            }
         );
      </script>

      <script type="text/javascript">
         $(document).ready(function() {


            /** ---------------------------- //
            *  @group viewport trigger script
            * for adding or removing classes from elements in view within viewport
            *  @author @david
            *  use like this: add following to css stylesheets:
            		.foobar.in-view {
            		@extend .fadeInUpBig;
            		transform:rotate(90deg)}
            */

            // ps: disable on small devices!
            var $animationElements = $('#GAMEOVER_x5F_MAP, #map_mob');
            var $window = $(window);

            function checkIfInView() {

               var windowHeight = $window.height();
               var windowTopPosition = $window.scrollTop();
               var windowBottomPosition = (windowTopPosition + windowHeight);

               $.each($animationElements, function() {
                  var $element = $(this);
                  var elementHeight = $element.outerHeight();
                  var elementTopPosition = $element.offset().top;
                  var elementBottomPosition = (elementTopPosition + elementHeight);

                  //check to see if this current container is within viewport
                  if ((elementBottomPosition >= windowTopPosition) &&
                     (elementTopPosition <= windowBottomPosition)) {
                     $element.addClass('in-view');
                  }
               });
            }

            $window.on('scroll resize', checkIfInView);
            $window.trigger('scroll');


            /* @end viewport trigger script  */

         });
      </script>

      <script>
         var fixed = document.getElementById('mySidenav');

         fixed.addEventListener('touchmove', function(e) {

            e.preventDefault();

         }, false);

         /* LANGUAFE FUNCTIONS */
         function openNav() {
            //document.querySelector("html").classList.add('overfl1');
            document.querySelector("body").classList.add('overfl1');
            $("#mySidenav").css("display", "flex").hide().fadeIn();

            $('.timeline-container').animate({
               opacity: 0
            }, 'fast');

            var divs1 = document.querySelectorAll("img.dropbtn,.burger-container,.logo-container,.card1,#sect1 ,#main1 ,#sect2,#sect3 ,#scenarios ,#map-section ,#whatwedo ,footer,#click");

            for (var i = 0; i < divs1.length; i++) {
               var divall = divs1[i];
               divall.classList.add("blurall");
            }

         }

         function closeNav1() {

            $("#mySidenav").fadeOut();
            var sect1Base = $("#sect1").offset().top;
            var currentScroll1 = $(window).scrollTop();
            if (currentScroll1 >= sect1Base - 70) {
               $('.timeline-container').animate({
                  opacity: 1
               }, 'fast');

            }
            var divs1 = document.querySelectorAll("img.dropbtn,.burger-container,.logo-container,.card1,#sect1 ,#main1 ,#sect2,#sect3 ,#scenarios ,#map-section ,#whatwedo ,footer,#click");

            for (var i = 0; i < divs1.length; i++) {
               var divall = divs1[i];
               divall.classList.remove("blurall");
            }
            //document.querySelector("html").classList.remove('overfl1');
            document.querySelector("body").classList.remove('overfl1');
         }
         /* END OF LANGUAGE GUNCTIONS */
      </script>

      <script src="../js/lazysizes.min.js"></script>


      <script src="../map_svg/map.js"></script>

      <script type="text/javascript">
         $(document).ready(function() {
            if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
               $('.nav-container').addClass("ios-nav");
            }
            // better to use $(document).ready(function(){
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
               $('#all-tab , #profile-tab, #close-tab').on('click', function() {

                  $('html,body').animate({
                     scrollTop: $("#scenarios").offset().top - 100
                  }, 1000)

               });
            }

            $('#click p, #get_quote p,#contact_click').on('click', function() {

               $(".con-fix").toggleClass("enabled");
               if ($(".con-fix").hasClass("enabled")) {
                  $('.timeline-container').animate({
                     opacity: 0
                  }, 'fast');
                  var divsblur = document.querySelectorAll(".nav-container,#sect1 ,#main1 ,#sect2,#sect3 ,#scenarios ,#map-section ,#whatwedo ,footer");

                  for (var i = 0; i < divsblur.length; i++) {
                     var divall = divsblur[i];
                     divall.classList.add("blurall");
                  }
               } else {
                  var sect1Base = $("#sect1").offset().top;
                  var currentScroll1 = $(window).scrollTop();
                  if (currentScroll1 >= sect1Base * 3 / 4) {
                     $('.timeline-container').animate({
                        opacity: 1
                     }, 'fast');

                  }
                  var divsblur = document.querySelectorAll(".nav-container,#sect1 ,#main1 ,#sect2,#sect3 ,#scenarios ,#map-section ,#whatwedo ,footer");

                  for (var i = 0; i < divsblur.length; i++) {
                     var divall = divsblur[i];
                     divall.classList.remove("blurall");
                  }
               }

               $("body").toggleClass("overfl-desk");
            });


         });

         function closeNav() {
            $("#gallery").removeClass("show");
            $("#mobile").removeClass(" hide  zoomOut");
            $("#mobile").addClass("zoomIn");


         };
      </script>
      <script src="../js/burger.js"></script>

      <script src="../js/myjs.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../vendor/bootstrap/js/popper.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="../js/jquery.waypoints.min.js"></script>
      <script src="../js/jquery.countTo.js"></script>
      <script>
         ;
         (function() {

            'use strict';

            var isMobile = {
               Android: function() {
                  return navigator.userAgent.match(/Android/i);
               },
               BlackBerry: function() {
                  return navigator.userAgent.match(/BlackBerry/i);
               },
               iOS: function() {
                  return navigator.userAgent.match(/iPhone|iPad|iPod/i);
               },
               Opera: function() {
                  return navigator.userAgent.match(/Opera Mini/i);
               },
               Windows: function() {
                  return navigator.userAgent.match(/IEMobile/i);
               },
               any: function() {
                  return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
               }
            };



            var counter = function() {
               $('.js-counter').countTo({
                  formatter: function(value, options) {
                     return value.toFixed(options.decimals);
                  },
               });
            };


            var counterWayPoint = function() {
               if ($('#colorlib-counter').length > 0) {
                  $('#colorlib-counter').waypoint(function(direction) {

                     if (direction === 'down' && !$(this.element).hasClass('animated')) {
                        setTimeout(counter, 400);
                        $(this.element).addClass('animated');
                     }
                  }, {
                     offset: '90%'
                  });
               }
            };

            // Animations
            var contentWayPoint = function() {
               var i = 0;
               $('.animate-box').waypoint(function(direction) {

                  if (direction === 'down' && !$(this.element).hasClass('animated')) {

                     i++;

                     $(this.element).addClass('item-animate');
                     setTimeout(function() {

                        $('body .animate-box.item-animate').each(function(k) {
                           var el = $(this);
                           setTimeout(function() {
                              var effect = el.data('animate-effect');
                              if (effect === 'fadeIn') {
                                 el.addClass('fadeIn animated');
                              } else if (effect === 'fadeInLeft') {
                                 el.addClass('fadeInLeft animated');
                              } else if (effect === 'fadeInRight') {
                                 el.addClass('fadeInRight animated');
                              } else {
                                 el.addClass('fadeInUp animated');
                              }

                              el.removeClass('item-animate');
                           }, k * 200, 'easeInOutExpo');
                        });

                     }, 100);

                  }

               }, {
                  offset: '85%'
               });
            };

            $(function() {
               counter();
               counterWayPoint();
               contentWayPoint();
            });
         }());
      </script>
      <script>
         function validateEmail(email) {
            var re = /[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/;
            return re.test(email);
         }

         function validateForm() {
            $("#result").text("");
            $("#result").css("font-size", "13px");
            $("#result").css("font-style", "italic  ");
            $("#result").css("color", "white");
            var country = $("#country").val();
            if (country == "default") {
               $("#result").text("NO COUNTRY SELECTED");
               return false;
            }
            var textbox = document.getElementById("message");
            if (textbox.value.length <= 15) {
               $("#result").text("MESSAGE IS TOO SHORT");
               return false;
            }
            var email = $("#email").val();
            if (validateEmail(email) == false) {
               $("#result").text(" THE " + email + " IS NOT VALID ");
               return false;
            }
            $("#submit").bind("click", "submit");
         }
      </script>
</body>

</html>