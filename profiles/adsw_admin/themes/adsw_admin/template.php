<?php

function adsw_admin_preprocess_html(&$vars) {
  if (arg(0) == 'user') {
    $vars['classes_array'][] = 'colorBg';
    $vars['classes_array'][] = 'colorBg1';
  }
  elseif (arg(0) == 'dashboard') {
    $vars['classes_array'][] = 'pace-done';
    $vars['classes_array'][] = 'skin-3';

  }
}

function adsw_admin_status_messages($variables) {
  $display = $variables['display'];
  $output = '';

  $status_heading = array(
    'status' => t('Status message'),
    'error' => t('Error message'),
    'warning' => t('Warning message'),
  );
  $status_classes = array(
    'status' => 'alert alert-success',
    'error' => 'alert alert-danger',
    'warning' => 'alert alert-warning',
  );

  foreach (drupal_get_messages($display) as $type => $messages) {
    $output .= "<div class=\"$status_classes[$type] animated fadeIn\">\n";
    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }
    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  if (arg(0) == 'user' && arg(1) == NULL) {
    return '<div class="container eternity-form"><div class="login-form-section">' . $output . '</div></div>';
  }
  if (arg(0) == 'user' && arg(1) == 'register') {
    return '<div class="container eternity-form"><div class="registration-form-section">' . $output . '</div></div>';
  }
  return $output;
}
