$(document).ready(function() {
  $(".gallery-menu .button").click(function() {
    $(this).addClass("active").siblings().removeClass("active");
  })
  $(".button").click(function() {
    var value = $(this).attr("data-filter");
    if (value == "all") {
      $(".filter").show("100");
    } else {
      $(".filter").not("." + value).hide("100");
      $(".filter").filter("." + value).show("100");
    }

  })

});

document.querySelector('.countries').addEventListener('click', function() {
  document.querySelector('.menu__list').classList.toggle('menu__list--animate');
});
