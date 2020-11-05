

$(document).ready(function() {
    var sect1Base= $("#sect1").offset().top;
    var sect2Base= $("#sect2").offset().top;
    var scenariosBase= $("#scenarios").offset().top;
    var mapsectionBase= $("#map-section").offset().top;
    var whatwedoBase= $("#whatwedo").offset().top;
    var currentScroll=$(window).scrollTop(); 
    var sect1Height = $("#sect1").height();
    var sect2Height =$("#sect2").height();
    var scenariosHeight =$("#scenarios").height();
    var mapsectionHeight = $("#map-section").height();
    var whatwedoHeight =$("#whatwedo").height();

    if(currentScroll>=sect1Base*3/4){
      $(".timeline-container").css('display','flex');
      $(".timeline-container").css('opacity','1');
      
    }
    
    $(window).scroll(function(){
    
      var currentScroll=$(window).scrollTop(); 
     
      if(currentScroll>=sect1Base - sect1Height*3/4 ){
        $(".timeline-container").css('display','flex');
        $(".timeline-container").css('opacity','1');
      }
      else{
        $(".timeline-container").css('display','none');
      }
    
    if(currentScroll>=sect1Base - sect1Height*3/4 && currentScroll<=sect1Height + sect1Base){
      $(".timeline_icon1").css('fill','white');
      $(".timeline_icon2").css('fill','#8E8E8E');
      $(".timeline_icon3").css('fill','#8E8E8E');
      $(".timeline_icon4").css('fill','#8E8E8E');
       $(".timeline_icon5").css('fill','#8E8E8E');
      $("#timeline_magnifier .cls-6").css('stroke','#8E8E8E');
    }
    if(currentScroll>=sect2Base-sect2Height*3/4 && currentScroll<=sect2Height + sect2Base){
    
      $(".timeline_icon2").css('fill','white');
      $(".timeline_icon1").css('fill','#8E8E8E');
      $(".timeline_icon3").css('fill','#8E8E8E');
      $(".timeline_icon4").css('fill','#8E8E8E');
       $(".timeline_icon5").css('fill','#8E8E8E');
      $("#timeline_magnifier .cls-6").css('stroke','white');
    
    }
    if(currentScroll>=scenariosBase -sect2Height*3/4 && currentScroll<=scenariosHeight + scenariosBase){
      $(".timeline_icon2").css('fill','8E8E8E');
      $(".timeline_icon1").css('fill','#8E8E8E');
      $(".timeline_icon3").css('fill','white');
      $(".timeline_icon4").css('fill','#8E8E8E');
       $(".timeline_icon5").css('fill','#8E8E8E');
      $("#timeline_magnifier .cls-6").css('stroke','8E8E8E');
    }
     
    if(currentScroll>=mapsectionBase -mapsectionHeight/2  && currentScroll<=mapsectionBase + mapsectionHeight){
      $(".timeline_icon2").css('fill','8E8E8E');
      $(".timeline_icon1").css('fill','#8E8E8E');
      $(".timeline_icon4").css('fill','white');
      $(".timeline_icon3").css('fill','#8E8E8E');
      $(".timeline_icon5").css('fill','#8E8E8E');
      $("#timeline_magnifier .cls-6").css('stroke','8E8E8E');
    } 
    if(currentScroll>=whatwedoBase -mapsectionHeight/2 && currentScroll<=whatwedoHeight + whatwedoBase){
      $(".timeline_icon2").css('fill','8E8E8E');
      $(".timeline_icon1").css('fill','#8E8E8E');
      $(".timeline_icon4").css('fill','#8E8E8E');
      $(".timeline_icon3").css('fill','#8E8E8E');
      $(".timeline_icon5").css('fill','white');
      $("#timeline_magnifier .cls-6").css('stroke','8E8E8E');
    } 
    
    });
    
    
    $('#TIMELINE_COM .rect1').on('mouseover',function(){
    $('#TIMELINE_COM #timeline_id').css('opacity','0');
    $('#TIMELINE_COM .text12.1').css('opacity','1');
    $('#TIMELINE_COM .text12.1').addClass(' bounceInRight');
   
    
    });
    $('#TIMELINE_COM .rect1').on('mouseleave',function(){
      $('#TIMELINE_COM #timeline_id').css('opacity','1');
      $('#TIMELINE_COM .text12.1').css('opacity','0');
      $('#TIMELINE_COM .text12.1').removeClass(' bounceInRight');
    });
    $('#TIMELINE_COM .rect2').on('mouseover',function(){
      $('#TIMELINE_COM #timeline_magnifier').css('opacity','0');
      $('#TIMELINE_COM .text12.2').css('opacity','1');
      $('#TIMELINE_COM .text12.2').addClass(' bounceInRight');
      });
      $('#TIMELINE_COM .rect2').on('mouseleave',function(){
        $('#TIMELINE_COM #timeline_magnifier').css('opacity','1');
        $('#TIMELINE_COM .text12.2').css('opacity','0');
         $('#TIMELINE_COM .text12.2').removeClass(' bounceInRight');
      });
      $('#TIMELINE_COM .rect3').on('mouseover',function(){
        $('#TIMELINE_COM .timeline_movie').css('opacity','0');
        $('#TIMELINE_COM .text12.3').css('opacity','1');
         $('#TIMELINE_COM .text12.3').addClass(' bounceInRight');
        });
        $('#TIMELINE_COM .rect3').on('mouseleave',function(){
          $('#TIMELINE_COM .timeline_movie').css('opacity','1');
          $('#TIMELINE_COM .text12.3').css('opacity','0');
           $('#TIMELINE_COM .text12.3').removeClass(' bounceInRight');
        });
        $('#TIMELINE_COM .rect4').on('mouseover',function(){
          $('#TIMELINE_COM #timeline_clients').css('opacity','0');
          $('#TIMELINE_COM .text12.4').css('opacity','1');
           $('#TIMELINE_COM .text12.4').addClass(' bounceInRight');
          });
          $('#TIMELINE_COM .rect4').on('mouseleave',function(){
            $('#TIMELINE_COM #timeline_clients').css('opacity','1');
            $('#TIMELINE_COM .text12.4').css('opacity','0');
             $('#TIMELINE_COM .text12.4').removeClass(' bounceInRight');
          });
          $('#TIMELINE_COM .rect5').on('mouseover',function(){
            $('#TIMELINE_COM .timeline_icon5').css('opacity','0');
            $('#TIMELINE_COM .text12.5').css('opacity','1');
             $('#TIMELINE_COM .text12.5').addClass(' bounceInRight');
            });
            $('#TIMELINE_COM .rect5').on('mouseleave',function(){
              $('#TIMELINE_COM .timeline_icon5').css('opacity','1');
              $('#TIMELINE_COM .text12.5').css('opacity','0');
               $('#TIMELINE_COM .text12.5').removeClass(' bounceInRight');
            });
    
    /* ENDOF of timeline viewpoints */


});

