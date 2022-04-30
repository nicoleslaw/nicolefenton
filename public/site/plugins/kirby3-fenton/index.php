<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('hashsandsalt/kirby3-fenton', [

  'fieldMethods' => [
    'waysofbeing' => function ($field) {

        $string = $field->kirbytext();
        $patterns = array();
        $patterns[0] = '/\{\{ /';
        $patterns[1] = '/ \|\| /';
        $patterns[2] = '/ \}\}/';
        $replacements = array();
        $replacements[0] = "<span class=\"waysofbeing\"><span class=\"is-active\">";
        $replacements[1] = "</span><span class=\"hidden\">";
        $replacements[2] = "</span></span>";

        $waysofbeing = preg_replace($patterns, $replacements, $string);

        $result = str_replace(['<p>', '</p>'], '', $waysofbeing);
        return $result;

    },

    'stripp' => function ($field) {
      $string = $field->kirbytext();
      $patterns = array();
      $patterns[0] = '/\<p\>/';
      $patterns[1] = '/\<\/p\>/';
      $replacements = array();
      $replacements[0] = "";
      $replacements[1] = "";
      return preg_replace($patterns, $replacements, $string);
  },

],

'tags' => [
  'figure' => [
      'attr' => [
        'link',
        'alt'
      ],
      'html' => function($tag) {
        // $url     = '';
        $imagesource = $tag->figure;
        $link = $tag->link;
        $alt  = $tag->alt;
        $fileurl =  page()->file($tag->figure)->toFile() ? page()->file($tag->figure)->url() : ' ';
        $html = '<img loading="auto" src="' . $fileurl .'" alt="'. $alt .'" class="lazy" />';
        if($link) {
          $html = '<a href="'. $link .'" class="contains-image">'. $html .'</a>';
        }
        return '<figure>' . $html . '</figure>';
      }
  ]
]

]);
