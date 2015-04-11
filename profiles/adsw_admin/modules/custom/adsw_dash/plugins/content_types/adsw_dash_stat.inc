<?php

$plugin = array(
  'category' => t('AdSwallow'),
  'title' => t('ADSW hardcode stat'),
  'description' => t('adsw_hardcoded_stat'),
  'render callback' => 'adsw_hardcoded_stat_render',
);


/**
 * Outputs request promotion
 */
function adsw_hardcoded_stat_render($subtype, $conf, $panel_args, $context) {
  global $user;
    $user = user_load($user->uid);

//    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/login/css/font-awesome.min.css');
    drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', 'external');
    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/dash/bootstrap.min.css');
    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/dash/animate.css');
    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/dash/style.css');
    drupal_add_css(drupal_get_path('theme', 'adsw_admin') . '/dash/datepicker3.css');


$block = new stdClass();
  $block->content = theme('adsw_dash_layout');
  return $block;
}
