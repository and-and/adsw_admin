<?php

$plugin = array(
  'category' => t('AdSwallow'),
  'title' => t('ADSW stat select banner'),
  'render callback' => 'adsw_stat_select_banner_render',
);


/**
 * Outputs request promotion
 */
function adsw_stat_select_banner_render($subtype, $conf, $panel_args, $context) {
  $form = drupal_get_form('adsw_stat_select_banner_form');
  $form = drupal_render($form);

  $block = new stdClass();
  $block->content = $form;
  return $block;
}
