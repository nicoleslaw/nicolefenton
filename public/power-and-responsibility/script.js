$(document).ready(function(){

height = $(window).height() / 2;

  var p1 = $('.first').offset().top - height;
  var p2 = $('.second').offset().top - height;
  var p3 = $('.third').offset().top - height;
  var p4 = $('.fourth').offset().top - height;
  var p5 = $('.fifth').offset().top - height;

  $(window).scroll(function() {
    var position = $(window).scrollTop();
    console.log(position);

    if      (position > p5) { $('.wrapper').addClass('reached5'); }
    else if (position > p4) { $('.wrapper').addClass('reached4'); }
    else if (position > p3) { $('.wrapper').addClass('reached3'); }
    else if (position > p2) { $('.wrapper').addClass('reached2'); }
    else if (position > p1) { $('.wrapper').addClass('reached1'); }
  });
  
});