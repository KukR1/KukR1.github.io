
$(document).ready(function() {
  
  (function($) {
    "use strict"; // Start of use strict
  
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      var x=this.getAttribute('href');
      
          $('html, body').animate({
            scrollTop: ($(x).offset().top - 54)
          }, 1000, "easeInOutExpo");
          return false;
        
      
    });
  
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 54
    });
  
  })(jQuery); // End of use strict
  /*document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
     
        e.preventDefault();
       var x=this.getAttribute('href');
       console.log(x);

      
        document.querySelector(this.getAttribute('href')).scrollIntoView({
         
          behavior: 'smooth',
            block: 'start',
            inline:'start'
        }); 

        window.scroll({
          top: $(x).offset().top - 200 , 
          left: 0, 
          behavior: 'smooth' 
        }); 
      
    });
});*/
  /*Animation for Get a Quote */

  	$(".p").hover(
			function(){
				$(".p").addClass("pulse");
		},
		function(){
				$(".p").removeClass("pulse");
		}
    );
    /*ENDOF animation for Get a Quote */
//////////////////////////////////////
    /*MAIN MENU TOGGLE */

  $(".navbar-toggler").click(function() {
    $(".back").toggleClass("toggleNav1");
    $(".front").toggleClass("toggleNav");
    $("body").toggleClass("overfl");
    $("html").toggleClass("overfl");
    if ($(window).width() < 768) {
    $(".dropup").toggle();
    }


  });
  if ($(window).width() < 768) {
    $(".card1 ul li a ").click(function() {

      $(".back").toggleClass("toggleNav1");
      $(".front").toggleClass("toggleNav");
      $("#burger").removeClass("is-active");
      $("body").toggleClass("overfl");
      $("html").toggleClass("overfl");
      
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    });  
  
    });

 }
/* ENDOF MAIN MENU TOGGLE */
/* Timeline Viewpoints */

/*Expand section scroll element , timeline appear on scroll*/
var sect1Base= $("#sect1").offset().top;

  $("#expand-button").click(function() {
    $("#sect1").toggleClass("expand-section");
    $("body").toggleClass("overfl-desk");
  
  });
  $("#btn1").click(function(e) {
    e.preventDefault();
    $("#sect1").toggleClass("expand-section");
    $("#sect2").removeClass("expand-section");
    $("#sect2").toggleClass("mar");

    setTimeout(function() {window.scrollTo(0, sect1Base );},1)
    
    $("#sect1 .fade1").toggleClass("inv");
    $("#sect1 .fade2").toggleClass("inv");

    if($("#sect2 .fade1").hasClass("inv")){
      $("#sect2 .fade1").toggleClass("inv");
        $("#sect2 .fade2").toggleClass("inv");
    };

  });
  $("#btn2").click(function(e) {
    e.preventDefault();
    if( !$("#sect2").hasClass("expand-section")){
      var x=$('#sect2').height();
      $("#sect1").toggleClass("mar");
      setTimeout(function() {window.scrollTo(0, sect1Base + x);},1)
    }
    $("#sect2").toggleClass("expand-section");
    $("#sect1").removeClass("expand-section");
    
    $("#sect2 .fade1").toggleClass("inv");
    $("#sect2 .fade2").toggleClass("inv");

    if($("#sect1 .fade1").hasClass("inv")){
      $("#sect1 .fade1").toggleClass("inv");
        $("#sect1 .fade2").toggleClass("inv");
    };
  });

  $("#mobile a").click(function() {
    $("#mobile").addClass(" animated zoomOut");
    $("#close-tab").removeClass("hide");
    $("#gallery").removeClass("hide");

    $("#gallery").addClass("show animated zoomIn");
    setTimeout(function () {
    $(".mb").addClass('hide');
  }, 200, true);

  });



  $(window).on('scroll touchmove', function (){
    // if($(window).scrollTop()>0){
    //   $('#cube_banner').hide();
    // }
    // if($(window).scrollTop()==0){
    //   $('#cube_banner').show();
    // }
    var offsetTop = $("#myTabContent").offset().top;
    var scrollTop = $(window).scrollTop();
    if(scrollTop > offsetTop - 70 && $(window).width()<=765){


      $("#myTab").addClass("tabs animated fadeIn");
      $("#all-tab").addClass("nav-tabs");
      $("#profile-tab").addClass("nav-tabs");
      $("#close-tab").addClass("nav-tabs");
    }
    else {
      $("#myTab").removeClass("tabs animated fadeIn");
      $("#myTab").removeClass("fl");
      $("#myTab").removeClass("tabs animated fadeIn");
      $("#all-tab").removeClass("nav-tabs");
      $("#profile-tab").removeClass("nav-tabs");
      $("#close-tab").removeClass("nav-tabs");
    }
  });

});
