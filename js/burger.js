$(document).ready(function() {

    $("#navbarResponsive").on("hidden.bs.collapse", function() {
        $("#burger").removeClass("is-active")
    }),
     $(".hamburger, .hamburger--vortex , .collapse").click(function(n) {
        $(this).toggleClass("is-active")
    }),
     $("a.rem, .navbar-toggler").on("click", function() {
        $("li.itemb,li.itema").removeClass("blur")
    }),
    $("#nav").on("show.bs.dropdown", function() {
        $("li.itemb").addClass("blur")
    }),
    $("#nav2").on("show.bs.dropdown", function() {
        $("li.itema").addClass("blur")
    }),
     $("#nav,#nav2").on("hide.bs.dropdown", function() {
        $("li.itemb,li.itema").removeClass("blur")
    })
});
