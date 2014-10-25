<?php

  // Print Facebook OpenGraph header stuff.
  function opengraph( $pageTitle ) {
    $html =  "\n  ".'<!--- FB OG Tags -->';
    $html .= "\n  ".'<meta property="og:title" content="'. $pageTitle . '" />';
    $html .= "\n  ".'<meta property="og:locale" content="en_US" />';
    $html .= "\n  ".'<meta property="og:type" content="website" />';
    $html .= "\n  ".'<meta property="og:site_name" content="Daniel Handler" />';
    $html .= "\n  ".'<meta property="og:url" content="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '" />';
    $html .= "\n  ".'<meta property="article:publisher" content="https://www.facebook.com/daniel.handler" />';
    $html .= "\n  ".'<link rel="canonical" href="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '" />';
    // $html .= "\n  ".'<meta property="og:image" content="" />';
    return $html;
  }

?>