<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby.

If you have no license yet, please buy one:
http://getkirby.com/buy and support an indie developer.

You are not allowed to run a website without a valid license key.
Please read the End User License Agreement for more information:
http://getkirby.com/license

*/

c::set('license', '');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs

*/

c::set('markdown.extra', 'true'); //Enable markdown extra 
// c::set('markdown.breaks', false);

c::set('cache', true); // Enable caching

/*

---------------------------------------
Custom Routing 
to hide /writing from URLs, while keeping /content tidy
note: Our assumed stub directory is /writing/ 
cf. http://getkirby.com/docs/advanced/routing#omitting-the-blog-folder-in-urls
---------------------------------------

*/

c::set('routes', array(
  array(
    'pattern' => '(:any)/([a-zA-Z0-9_-]+(.jpg|.png|.gif|.svg))',
    'action'  => function($stub, $filename) {

    /** 
      * See if the stub is a real content directory 
      * If not, see if it is a sub-directory of our
      * removed directory: /writing 
      */
      $page = @page($stub);
      if (!$page) { 
        $page = @page('writing/'.$stub); 
      }

    /**
      * If the page exists and is a real page 
      * (e.g. /error), it will have a url 
      */
      if( @$page->url() ) { 
      /** 
        * See if the file really exists in that content directory. 
        */
        $file = @$page->files()->find($filename);
        if ( !$file || $file == null ) {
        /** 
          * Handle actual 404 missing images
          */
          return false;
          // return go( 'error' );
        } else {
          $fileURL = $file->url();
        }
      } 
    
    /**
      * Load the actual image or the error page if it doesn't exist.
      */
      return go( $fileURL ? $fileURL : 'error' );
    }
  ),
  array(
    // 'pattern' => '(:any)',
    'pattern' => '([a-zA-Z0-9_-]+)', // Page slug is alphanumeric with dashes
    'action'  => function($uid) {

      $page = page($uid);

      if(!$page) $page = page('writing/' . $uid);
      if(!$page) $page = site()->errorPage();

      return site()->visit($page);

    }
  ),
  array(
    'pattern' => 'writing/([a-zA-Z0-9_-]+)',
    'action'  => function($uid) {
      
      return go( $uid );

    }
  ),
  // array(
  //   'pattern' => 'sitemap.xml',
  //   'action'  => function() {
  //     return site()->visit('sitemap');
  //   }
  // ),
  // array(
  //   'pattern' => 'sitemap',
  //   'action'  => function() {
  //     return go( 'sitemap.xml' );
  //   }
  // ),
));