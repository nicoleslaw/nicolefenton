<?php

return function ($page, $kirby, $site) {

  // SEO
  $seo = $kirby->controller('seo' , compact('page', 'site', 'kirby'));

  // Override Meta Title
  $title = $page->seotitle()->isNotEmpty() ? $page->seotitle() : $page->title();

  $metatitle = $title;
  $metafblocale = 'en_US';
  $metatwsite = $site->twitter();
  $metatwcreator = $site->twitter();


  $data = compact('metatitle', 'metafblocale', 'metatwsite', 'metatwcreator');

  return array_merge($seo, $data);

};
