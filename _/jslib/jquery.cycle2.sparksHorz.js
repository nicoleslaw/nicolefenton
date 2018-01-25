/* Custom Transition for Cycle2 : sparksHorz

@TODO: get reverse functional
@TODO: base height resize not on sentinel
*/

(function($) {
"use strict";

  $( document ).on('cycle-bootstrap', function( e, opts, API ) {
    if ( opts.fx !== 'sparksHorz' ) {
      return;
    }

    API.next = function() {
      if( opts.nextSlide === 0 ) {
        return;
      }

      var count = opts.reverse ? -1 : 1;
      opts.API.advanceSlide( count );
    };

    API.prev = function() {
      if( opts.currSlide === 0 ){
        return;
      }

      var count = opts.reverse ? 1 : -1;
      opts.API.advanceSlide( count );
    };
  });

  $.fn.cycle.transitions.sparksHorz = {
    preInit: function( opts ) {
      opts.hideNonActive = false;
      opts.allowWrap = false;
      opts.loop = 0;
      opts.reverse = false; // prevent reverse for the time being

      opts.container.on('cycle-destroyed', $.proxy(this.onDestroy, opts.API));
      opts.API.stopTransition = this.stopTransition;
    },

    postInit: function( opts ) {
      this.prepareDimensions( opts );
      this.getResponsive( opts );

      if( opts.reverse ) {
        for( var i = 1; i < opts.slides.length; i++) {
          $(opts.slides[i]).css({ 'left' : - opts.offset * i });
        }
      }
      else {
        $('.zilla-slide-prev-full').addClass('zilla-slide-inactive');
        for( var j = 1; j < opts.slides.length; j++) {
          $(opts.slides[j]).css({ 'left' : opts.offset * j });
        }
      }
    },

    prepareDimensions: function( opts ) {
      var slideWidth, containerWidth;

      containerWidth = $(opts.container).parent(true).outerWidth();
      slideWidth = $(opts.slides[0]).outerWidth(true);

      // Center slides
      opts.container.width( containerWidth );
      // Set the offset with a "50px margin"
      opts.offset = slideWidth + 50;
    },

    transition: function( opts, curr, next, fwd, callback ) {
      var props = {},
        speed = opts.speed,
        $next = $(opts.next),
        $prev = $(opts.prev);

      // Position slides
      for( var i = 1; i <= opts.slides.length; i++) {
        props.left = fwd ? ( "-=" + opts.offset ) : ( "+=" + opts.offset );
        $(opts.slides[i-1]).animate( props, speed, opts.easing, callback );
      }

      // Add or remove inactive class depending on current slide
      if( opts.slideNum === 1 ) {
        $prev.addClass('zilla-slide-inactive');
      } else {
        $prev.removeClass('zilla-slide-inactive');
      }
      if( opts.slideNum === opts.slideCount ) {
        $next.addClass('zilla-slide-inactive');
      } else {
        $next.removeClass('zilla-slide-inactive');
      }

    },

    getResponsive: function( opts ) {
      var timeout,
        slide = opts.slides.eq(0),
        adjustment = slide.outerWidth() - slide.width();

      function resizeThrottle() {
        // slow down the calling the on Resize function
        clearTimeout( timeout );
        timeout = setTimeout( onResize, 100 );
      }

      function onResize() {
        var containerWidth = $(opts.container).parent(true).outerWidth(),
          slideWidth = Math.round( containerWidth * 0.9 ),
          slideHeight,
          tmp;

        if( slideWidth > 750 ) {
          slideWidth = 750;
        }

        // Set deminsions
        slideWidth = Math.ceil( slideWidth - adjustment );
        opts.container.width( containerWidth ); // centers slides
        opts.offset = slideWidth + 50;

        // Position the slides
        for( var i = 0; i < opts.slides.length; i++) {
          if( opts.currSlide === i ) {
            tmp = 0;
          } else {
            tmp = ( i - opts.currSlide ) * opts.offset;
          }
          $(opts.slides[i]).css({ 'left' : tmp });
        }

        // Set the height of the container
        slideHeight = $(opts.slides[opts.currSlide]).outerHeight();
        opts.container.height( slideHeight );
      }

      $(window).on( 'resize', resizeThrottle );
    },

    stopTransition: function() {
      var opts = this.opts();
      opts.slides.stop( false, true );
    },

    onDestroy: function( e ) {
      var opts = this.opts();
      opts.slides.prependTo( opts.container );
    }
  };
})(jQuery);