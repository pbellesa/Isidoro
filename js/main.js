$(document).ready(function(){
  var height = $(window).height() - $('.navbar').height();
  $("#hero").height(height);
  $(window).resize(function(){
      $("#hero").height(height);
	});
  $(window).scroll(function () { 

    if ($(window).scrollTop() > $(window).height()-$('.navbar').height()) {
      $('#navbar').addClass('navbar-fixed-top');

    }

    if ($(window).scrollTop() < $(window).height()) {
      $('#navbar').removeClass('navbar-fixed-top');
      $('#navbar').removeClass('start');
    }

    if ($(window).scrollTop() == 0) {
      $('#navbar').addClass('start');
    

    };
  });

  $('ul.nav > li > a').click(function(){
    $('div.show-footer').removeClass('in');
    event.preventDefault();
    var offset = 50;
    var href = $(this).attr('href');
    if ($('#navbar').hasClass('navbar-fixed-top')) {
        offset = 0;
    };

    $('html, body').stop().animate({
      scrollTop: $(href).offset().top - offset
    },800);
  });

  $('#chevron').click(function(){
    var offset = 50;
    var href = "#sobre"
    if ($('#navbar').hasClass('navbar-fixed-top')) {
        offset = 0;
    };

    $('html, body').stop().animate({
      scrollTop: $(href).offset().top - offset
    },800);
  });
  
  $('.navbar-toggle').on('click', function () {
    if ($('#navbar').hasClass('start')) {
      $('html, body').stop().animate({
      scrollTop: $('#navbar').offset().top
    },800);
    };
  });
});
