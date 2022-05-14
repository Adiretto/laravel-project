/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$("document").ready(function () {
  var _$$css;

  /*header fixed*/
  var header = $("#header");
  var height = $("#container1").innerHeight(),
      scrollOfSet = $(window).scrollTop();
  checkScroll(scrollOfSet);
  $(window).on("scroll", function () {
    scrollOfSet = $(this).scrollTop();
    checkScroll(scrollOfSet);
  });

  function checkScroll(scrollOfSet) {
    if (scrollOfSet >= height - 1) {
      header.addClass("fixed");
    } else {
      header.removeClass("fixed");
    }
  }
  /*header scroll*/


  $("[data-scroll]").on("click", function () {
    event.preventDefault();
    var c = $(this);
    var a = c.data('scroll');
    var b = $(a).offset().top;
    $("#header a").removeClass("active");
    c.addClass("active");
    $("html,body").animate({
      scrollTop: b
    });
  });
  /*header collapse*/

  $("#collapse").on("click", function () {
    $("#collapsibleNavbar").slideToggle();
  });
  /*Training programs img animation*/

  $("#Image img").on("mouseover", function () {
    $(this).animate({
      height: '+=10px',
      width: '+=10px'
    });
  });
  $("#Image img").on("mouseout", function () {
    $(this).animate({
      height: '-=10px',
      width: '-=10px'
    });
  });
  /*registration form*/

  $("#Modal").css((_$$css = {
    "width": "70%",
    "height": "85%",
    "margin": "0 auto",
    "border-radius": "1%",
    "background": "#fafafa",
    "position": "fixed",
    "top": "0",
    "left": "0",
    "right": "0",
    "bottom": "0"
  }, _defineProperty(_$$css, "margin", "auto"), _defineProperty(_$$css, "display", "none"), _defineProperty(_$$css, "opacity", "0"), _defineProperty(_$$css, "z-index", "38"), _defineProperty(_$$css, "text-align", "center"), _$$css));
  $("#Modal__close").css({
    "position": "absolute",
    "top": "15px",
    "right": "20px",
    "cursor": "pointer",
    "display": "block",
    "font-size": "20px"
  });
  $("#Overlay").css({
    "z-index": "20",
    "position": "fixed",
    "background-color": "black",
    "width": "100%",
    "height": "100%",
    "top": "0",
    "left": "0",
    "cursor": "pointer",
    "display": "none"
  });
  $(".btn").click(function () {
    event.preventDefault();
    $("#Overlay").fadeIn(300, function () {
      $("#Modal").css("display", "block").animate({
        opacity: 1
      }, 200);
    });
  });
  $("#Modal__close, #Overlay").click(function () {
    $("#Modal").animate({
      opacity: 0
    }, 200, function () {
      $(this).css("display", "none");
      $("#Overlay").fadeOut(300);
    });
  });
  /*audio*/

  var audio = new Audio('/music/Robin Schulz feat. Francesco Yates-Sugar (feat. Francesco Ya.mp3');
  var counter = 0;
  $("#audio_icon").on("click", function () {
    if (counter == 0) {
      audio.play();
      counter++;
      $("#audio_icon_1").css("display", "none");
      $("#audio_icon_2").css("display", "block");
    } else if (counter == 1) {
      audio.pause();
      counter--;
      $("#audio_icon_1").css("display", "block");
      $("#audio_icon_2").css("display", "none");
    }
  });
  /*registration psw*/

  var a1 = $("#eye_icon_1");
  var b1 = $("#eye_icon_slash_1");
  var c1 = $("#psw_1");
  var a2 = $("#eye_icon_2");
  var b2 = $("#eye_icon_slash_2");
  var c2 = $("#psw_2");
  $("#eye_1").on("click", function () {
    if (c1.attr('type') == 'password') {
      c1.attr("type", "text");
      a1.css("display", "block");
      b1.css("display", "none");
    } else {
      c1.attr("type", "password");
      a1.css("display", "none");
      b1.css("display", "block");
    }
  });
  $("#eye_2").on("click", function () {
    if (c2.attr('type') == 'password') {
      c2.attr("type", "text");
      a2.css("display", "block");
      b2.css("display", "none");
    } else {
      c2.attr("type", "password");
      a2.css("display", "none");
      b2.css("display", "block");
    }
  });
});
/******/ })()
;