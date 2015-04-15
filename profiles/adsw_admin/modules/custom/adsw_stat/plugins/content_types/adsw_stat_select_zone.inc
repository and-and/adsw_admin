<?php

$plugin = array(
  'category' => t('AdSwallow'),
  'title' => t('ADSW stat select zone'),
  'render callback' => 'adsw_stat_select_zone_render',
);


/**
 * Outputs request promotion
 */
function adsw_stat_select_zone_render($subtype, $conf, $panel_args, $context) {
  if (!$account = user_load(arg(2))) return;

  $user_wrapper = entity_metadata_wrapper('user', $account);
  $html = '<h1>User has not zones.</h1>';

  if (isset($user_wrapper->field_zones)) {
    $zones_wrapper = $user_wrapper->field_zones;
    $zones = $zones_wrapper->value();
    $header = array('Zone name', '');
    $rows = array();
    foreach ($zones_wrapper as $zone_wrap) {
      $zone_name = $zone_wrap->field_zone_name->value();
      $zone_id = $zone_wrap->item_id->raw();
      $rows[] = array($zone_name, l('select', 'admin/stats/' . $account->uid . '/' . $zone_id));
    }
    if (!empty($rows)) {
      $html = '<h1>Select zone of user "' . $account->name . '"</h1>';
      $html .= theme('table', array('header' => $header, 'rows' => $rows));
    }
  }

  $block = new stdClass();
  $block->content = $html;
  return $block;
}
