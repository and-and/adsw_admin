<?php
// $Id: $

// Plugin definition
$plugin = array(
  'title' => t('FAW common layout'),
  'category' => t('FAW'),
  'icon' => 'faw_common.png',
  'theme' => 'faw_faw_common',
  'admin theme' => 'faw_faw_common_admin',
  'admin css' => 'faw_common.css',
	'hook menu'	=> 'faw_site_panels_layouts_menu',
  'regions' => array(
    'header'=> t('Header'),
    'header_menu' => t('Header menu'),
    'breadcrumbs' => t('Breadcrumbs Section'),
    'content' => t('Main Content Section'),
    'footer_links' => t('Footer Menu Links')
  ),
);
