$(document).ready(function () {
  if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
    $(".nav-container").addClass("ios-nav");
  }

  /*  MAIN MENU TOGGLE */

  $(".navbar-toggler").click(function () {
    $(".back").toggleClass("toggleNav1");

    $(".front").toggleClass("toggleNav");

    $("body").toggleClass("overfl");

    $("html").toggleClass("overfl");

    if ($(window).width() < 768) {
      $(".dropup").toggle();
    }
  });

  $(".card1 ul li a ").click(function () {
    $(".back").toggleClass("toggleNav1");

    $(".front").toggleClass("toggleNav");

    $("#burger").removeClass("is-active");

    $("body").toggleClass("overfl");
  });

  $("#navbarResponsive").on("hidden.bs.collapse", function () {
    $("#burger").removeClass("is-active");
  });

  $(".hamburger, .hamburger--vortex , .collapse").click(function () {
    $(this).toggleClass("is-active");
  });

  /* ENDOF MAIN MENU TOGGLE 

    /////////////////////////////////////

     LANGUAFE FUNCTIONS */

  $(".dropup ").click(function () {
    document.querySelector("body").classList.add("overfl1");

    $("#mySidenav").css("display", "flex").hide().fadeIn();

    //var divs1 = document.querySelectorAll("img.dropbtn,.burger-container,.logo-container,.card1,#sect1 ,#main1 ,#sect2 ,#scenarios ,#map-section ,#whatwedo ,footer,#click,#carouselExampleIndicators,#mainsect");

    for (var i = 0; i < divs1.length; i++) {
      var divall = divs1[i];

      divall.classList.add("blurall");
    }
  });

  $(".closebtn ").click(function () {
    $("#mySidenav").fadeOut();

    //var divs1 = document.querySelectorAll("img.dropbtn,.burger-container,.logo-container,.card1,#sect1 ,#main1 ,#sect2 ,#scenarios ,#map-section ,#whatwedo ,footer,#click,#carouselExampleIndicators,#mainsect");

    for (var i = 0; i < divs1.length; i++) {
      var divall = divs1[i];

      divall.classList.remove("blurall");
    }

    document.querySelector("body").classList.remove("overfl1");
  });

  /* END OF LANGUAGE fUNCTIONS */

  /* START OF CONTACT EFFECT */

  $("#click p, #get_quote p,#contact_click").on("click", function () {
    $(".con-fix").toggleClass("enabled");

    if ($(".con-fix").hasClass("enabled")) {
      //var divsblur = document.querySelectorAll(".nav-container,#sect1 ,#main1 ,#sect2 ,#scenarios ,#map-section ,#whatwedo ,footer,#carouselExampleIndicators,#mainsect");

      for (var i = 0; i < divsblur.length; i++) {
        var divall = divsblur[i];

        divall.classList.add("blurall");
      }
    } else {
      //var divsblur = document.querySelectorAll(".nav-container,#sect1 ,#main1 ,#sect2 ,#scenarios ,#map-section ,#whatwedo ,footer,#carouselExampleIndicators,#mainsect");

      for (var i = 0; i < divsblur.length; i++) {
        var divall = divsblur[i];

        divall.classList.remove("blurall");
      }
    }

    $("body").toggleClass("overfl-desk");
  });

  // $("#click p").on(" touchstart", function () {

  //     $(".con-fix").toggleClass("enabled"), $("body").toggleClass("overfl-desk"), $(":focus").blur()

  //   });

  /* START OF SCROLL TRIGGER  */

  (function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing

    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
      var x = this.getAttribute("href");

      $("html, body").animate(
        {
          scrollTop: $(x).offset().top - 54,
        },
        1000,
        "easeInOutExpo"
      );

      return false;
    });

    // Closes responsive menu when a scroll trigger link is clicked

    $(".js-scroll-trigger").click(function () {
      $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll

    $("body").scrollspy({
      target: "#mainNav",

      offset: 54,
    });
  })(jQuery);

  /* END OF SCROLL TRIGGER  

    /////////////////////////////////////

     */
});
