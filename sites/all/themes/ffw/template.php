<?php

 function ffw_menu_link_alter(&$item) {
  if($item['menu_name'] == 'menu-secondary-menu')
  {
    $item['expanded'] = 1;
  }
}
/*
function ffw_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  if (strpos(url($element['#href']), 'nolink')) {
    $output = '' . $element['#title'] . '';
  } else {
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  }
  return '' . $output . $sub_menu . "\n";
}
*/