<?php

kirbytext::$tags['figure'] = array(
  'attr' => array(
    'link',
    'alt'
  ),
  'html' => function($tag) {

    // $url     = '';
    $imagesource = $tag->attr('figure');
    $link    = $tag->attr('link', '');
    $alt    = $tag->attr('alt', '');

    $html = '<img src="' . $imagesource .'" alt="'. $alt .'" class="lazy" />';

    if($link) {
    	$html = '<a href="'. $link .'" class="contains-image">'. $html .'</a>';
    }
    return '<figure>' . $html . '</figure>';

  }
);

?>