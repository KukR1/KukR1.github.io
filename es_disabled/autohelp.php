<!DOCTYPE html>

<html lang="es">



<head>





  <meta charset="utf-8">



  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">



  <title> AHS | GAME OVER Escape Rooms </title>

  <meta name="keywords" content="" />

  <meta name="description" content="AHS ist ein automatisierter Weg, um die Spieler im Raum zu steuern und zu führen.">

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



  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,800" rel="stylesheet">

  <link href="../css/autohelp.css" rel="stylesheet">



  <link href="../css/bootstrap-index.css" rel="stylesheet">

  <link href="../css/animate.min.css" rel="stylesheet">

  <link href="../css/final_style.min.css" rel="stylesheet">





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



        var textbox = document.getElementById("message");     if(textbox.value.length <= 15){               $("#result").text("MESSAGE IS TOO SHORT");       return false;      }     var email = $("#email").val();



        if (validateEmail(email) == false) {

          $("#result").text(" THE " + email + " IS NOT VALID ");

          return false;



        }



        $("#submit").bind("click", "submit");





      }

      </script>

	<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87676239-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-87676239-1');

</script>



</head>



<body id="page-top">



  <div class="container-fluid nav-container p-0 fixed-top" style="">

    <?php include '../inc/logo.php'; ?>

    <?php include '../inc/es-out-of-folder-menu-tabs.php'; ?>





    <div class="burger-flag" style="">

    <div class="burger-container  ">

        <button id="burger" class="navbar-toggler hamburger  hamburger--vortex p-0" type="button" style="" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

          <span class="hamburger-box">

            <span class="hamburger-inner "></span>

          </span>

        </button>

            </div>

            <div class="dropup-container" style="margin-top:-2px;">

        <div class="dropup" style="" >

        <img class="dropbtn" style="width:25px;" src="../img/flags/select.svg" alt="Select a language">

          <div class="dropup-content text-center">



        </div>

      </div>



        <div id="mySidenav" class="sidenav nav navbar-nav" style="overflow:hidden;">

         <button class="closebtn" >&times;</button>



            <p class="text-center" style="color:white;font-size:17px;margin:25px 0;font-weight:300;width:100%;">CHOOSE LANGUAGE</p>

            <div class="" style="display: flex;justify-content: center;align-items: center;padding-bottom:40px;font-size:13px;">

              <ul class="text-left" >

              <div class="lang">

                    <img  style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/en.svg" alt="GAME OVER - English">

                    <a href="../autohelp.php">English</a>

                  </div>

                  <div class="lang">#contact_form

                    <img style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/gr.svg" alt="GAME OVER - Greek">

                    <a style="align-items:center;" href="../gr/autohelp.php">Greek</a>

                  </div>

                  <div class="lang">

                    <img  style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/de.svg" alt="GAME OVER - German">

                    <a href="../de/autohelp.php">German</a>

                  </div>

                  <div class="lang">

                    <img  style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/it.svg" alt="GAME OVER - Italian">

                    <a href="../it/autohelp.php">Italian</a>

                  </div>

                  <div class="lang">

                    <img  style="border-radius:50%;align-self: center;width:13px;" src="../img/flags/fr.svg" alt="GAME OVER - French">

                    <a href="../fr/autohelp.php">French</a>

                  </div>



              </ul>

            </div>



      </div>



        </div>





  </div>



</div> <!-- end of container fluid -->



  <section id="autohelp_main" class="container-fluid text-center">





    <div class="autohelp-box">

       <img src="../img/menus_logo/autohelp.svg" alt="" style="width:45px;height:45px;" >

       <h1>AUTOHELP <br> HINT SYSTEM</h1>



          <p>El AHS es una forma automática de controlar y guiar a los jugadores en la sala. <br>La idea principal del <span style="font-weight:700;">AHS</span> es que los

             jugadores reciban automáticamente la indicación desde una pantalla táctil temática adjunta a la escenografía. El beneficio

              más grande del Sistema de Indicación con Ayuda Automática (Autohelp Hint System, en inglés) es que el cliente reduce

              significativamente los costos de salario del personal, ya que no es necesario tener un Director de Juego (Game Master) en cada sala.

    </p>

   </div>

   <div class="blur-div"></div>

 </section>

 <section class="container-fluid text-center features" style="">

   <div class="row">

     <div class="features-title">

       	<p>CARACTERISTICAS</p>

     </div>

     <div class="features-list">

       <ul>

         <li>Un Director de Juego puede operar en 3 o 4 salas al mismo tiempo.</li>

 				<li>Períodos de tiempo ajustables entre las pistas dadas</li>

 				<li>Disponible en inglés y en el idioma local </li>

 				<li>Temporizador con cuenta regresiva en pantalla</li>

 				<li> Fondo temático para cada sala</li>

 				<li>Funcionamiento - Manuales de mantenimiento disponibles</li>

 				<li>Botón de emergencia para obtener Ayuda</li>

 				<li>Piezas de repuesto</li>

       </ul>

     </div>

   </div>

   <div class="img-container" style="position:relative;z-index:1; ">

     <picture>

       <source type="image/webp" srcset="../img/construction/autohelp1.webp">

       <img src="../img/construction/autohelp1.jpg" class="img-fluid" style="" alt="Autohelp system inside a room">

     </picture>

     <picture>

       <source type="image/webp" srcset="../img/construction/autohelp2.webp">

       <img src="../img/construction/autohelp2.jpg" class="img-fluid" style="" alt="Autohelp touch screen">

     </picture>

     <picture>

       <source type="image/webp" srcset="../img/construction/autohelp3.webp">

       <img src="../img/construction/autohelp3.jpg" class="img-fluid" style="" alt="Autohelp system in use">

     </picture>



   </div>

 </section>

 <section class="container-fluid text-center red" style="">



   <div class="p-container" style="" >

     <div class="left-p"  style="">

       <p style="">Cuando se desarrolla un juego de escape, los jugadores tienen que resolver una serie de acertijos y

           enigmas, paso a paso, para encontrar la salida en una hora.</p>

         <p style="">

           Durante esos 60 minutos hay un operador (Director de Juego) que les ve a través de las cámaras. De esta forma,

            si necesitan una pista, este se comunica con ellos escribiendo en un monitor que se encuentra en la sala o hablándoles directamente por el micrófono.

         </p>

   </div>

   <div class="right-p" style="">

<p style="";>Para ello, las empresas de juegos de escape necesitan tener personal

  suficiente para operar todas las salas en forma adecuada. Por supuesto, esto genera mayores gastos

  al dueño del negocio, pero es necesario para mantener la calidad del servicio en un nivel alto.</p>

   </div>



   </div>

 </section>







  <?php include '../inc/footer.php';?>

<?php include '../inc/es-contact-form.php';?>



  <script src="../js/jquery.min.js"></script>

  <script>

  var divs1 = document.querySelectorAll("img.dropbtn,.burger-container,.logo-container,.card1,footer,#click,#autohelp_main,.features ,.red");

  var divsblur = document.querySelectorAll("img.dropbtn,.burger-container,.logo-container,.card1,footer,#autohelp_main,.features, .red");

  </script>

  <script src="../js/js_all.js"></script>

  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../vendor/bootstrap/js/popper.min.js"></script>

  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</body>



</html>

