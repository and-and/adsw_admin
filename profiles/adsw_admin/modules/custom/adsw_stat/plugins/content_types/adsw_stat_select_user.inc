<?php

$plugin = array(
  'category' => t('AdSwallow'),
  'title' => t('ADSW stat select user'),
  'render callback' => 'adsw_stat_select_user_render',
);


/**
 * Outputs request promotion
 */
function adsw_stat_select_user_render($subtype, $conf, $panel_args, $context) {

  $query = db_select('users', 'u');
  $query->fields('u');
  $result = $query->execute()->fetchAll();

  $header = array('Name', '');
  $rows = array();
  foreach ($result as $val) {
    if (!$val->uid) continue;
    $rows[] = array($val->name, l('select', 'admin/stats/' . $val->uid));
  }

  $block = new stdClass();
  $block->content = '<h1>Select user</h1>' . theme('table', array('header' => $header, 'rows' => $rows));
  return $block;
}
