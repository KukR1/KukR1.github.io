var $progressBar = $('.progress-bar');
var $text = $('.percent');


var progress = 0; // initial value of your progress bar
var timeout = 10; // number of milliseconds between each frame
var increment = 1; // increment for each frame
var maxprogress = 81; // when to leave stop running the animation

function animate() {
  setTimeout(function() {
    progress += increment;
    if (progress < maxprogress) {
      $progressBar.attr('style', "width:" + progress + "%; background-color:#da1a35;");
      $('.percent').html(progress + "<sup>%</sup>")
      animate();
    } else {

    }
  }, timeout);
};
animate();

var $counter1 = $('#counter1');
var progress1 = 0; // initial value of your progress bar
var timeout1 = 10; // number of milliseconds between each frame
var increment1 = 0.1; // increment for each frame
var maxprogress1 = 4; // when to leave stop running the animation

function counter1() {
  setTimeout(function() {
    progress1 += increment1;
    if (progress1 < maxprogress1) {
      $('#counter1').text(parseInt(progress1) + "-")
      counter1();
    } else {

    }
  }, timeout);
};
counter1();

var $counter3 = $('#counter3');
var progress3 = 0; // initial value of your progress bar
var timeout3 = 10; // number of milliseconds between each frame
var increment3 = 0.3; // increment for each frame
var maxprogress3 = 31; // when to leave stop running the animation

function counter3() {
  setTimeout(function() {
    progress3 += increment3;
    if (progress3 < maxprogress3) {
      $('#counter3').text(parseInt(progress3))
      counter3();
    } else {

    }
  }, timeout);
};
counter3();

var $counter2 = $('#counter2');
var progress2 = 0; // initial value of your progress bar
var timeout2 = 10; // number of milliseconds between each frame
var increment2 = 0.5; // increment for each frame
var maxprogress2 = 88; // when to leave stop running the animation

function counter2() {
  setTimeout(function() {
    progress2 += increment2;
    if (progress2 < maxprogress2) {
      $('#counter2').text(parseInt(progress2) + "'")
      counter2();
    } else {

    }
  }, timeout);
};
counter2();

var $counter4 = $('#counter4');
var progress4 = 0; // initial value of your progress bar
var timeout4 = 10; // number of milliseconds between each frame
var increment4 = 0.1; // increment for each frame
var maxprogress4 = 7; // when to leave stop running the animation

function counter4() {
  setTimeout(function() {
    progress4 += increment4;
    if (progress4 < maxprogress4) {
      $('#counter4').text(parseInt(progress4))
      counter4();
    } else {

    }
  }, timeout);
};
counter4();
