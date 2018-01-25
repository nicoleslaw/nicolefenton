/* global console */
// v.1.2.0
// added lazyloac

// ---------------------------------------------------
// MAIN

jQuery(document).ready( function($) {

  /* ------------------------------------------------- */
  /* JS - YAY!                                         */
  /* ------------------------------------------------- */
  $('body').removeClass('no-js');

  /* ------------------------------------------------- */
  /* Coverup for FOUT                                  */
  /* ------------------------------------------------- */

  // $('.body-wrap').hide().fadeIn('slow', 'easeOutQuint');
  $('.body-wrap').velocity({opacity:0},{duration: 0}).velocity('fadeIn', {duration: 'slow', easing: 'easeOutQuint'});

  /* ------------------------------------------------- */
  /* Classes for figures
  /* ------------------------------------------------- */
  $('img').parent('a').addClass('contains-image');

  /* ------------------------------------------------- */
  /* Lazy load images                                  */
  /* ------------------------------------------------- */
  var $lazyimages = $("img.lazy");

  if ((typeof $lazyimages !== 'undefined') && ($lazyimages !== '0')) {
    $lazyimages.lazyload({
        effect : "fadeIn",
        event : "loaded",
        threshold : 200
    });

    var lazytimeout = function() {
      // console.log('Lazyload automatic timeout.');
      $lazyimages.trigger("loaded");
    }

    $(window).bind("load", function() {
      setTimeout(lazytimeout, 3500);
    });
  }

  /* ------------------------------------------------- */
  /* Ways of Being                                     */
  /* ------------------------------------------------- */
  function cycleWaysofbeing( $this, $sizeoflist ) {
    // var $this = $(this);
    var $nextway;

    if ( $this.index() + 1 < $sizeoflist ) {
      $nextway = $this.next('span');
    } else {
      $nextway = $this.parent('.waysofbeing').find('span').first();
    }


    $this.add($nextway).toggleClass('is-active').hide();
    // $nextway.fadeIn('fast');
    $nextway.velocity('fadeIn', {duration: 'fast'});
  }

  $('.waysofbeing').each( function() {
    var $listitems = $(this).find("span");
    var $sizeoflist = $listitems.length;

    $listitems.filter('.hidden').hide().removeClass('hidden');

    $listitems.on('click', function() {
        cycleWaysofbeing( $(this), $sizeoflist );
      }
    );
  });

  /* ------------------------------------------------- */
  /* SVG Fallbacks                                     */
  /* ------------------------------------------------- */
  if (!Modernizr.svg) {
    $('img[src$=".svg"]').each(function()
    {
        $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
    });
  }


  /* ------------------------------------------------- */
  /* Testimonials                                      */
  /* ------------------------------------------------- */
  var $testimonials = $( "#testimonials" );
  if ( typeof $testimonials != 'undefined' && $testimonials.length  ) {
    var $testimonialslist = $testimonials.find( "ul.testimonial-list" );
    if ( typeof $testimonialslist != 'undefined' && $testimonialslist.length  ) {
      $testimonialslist.shuffle();
      $testimonialslist.addClass('shuffled');
    }
  }

});

