<?php
/**
 * @file
 * adswl_user.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function adsw_user_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_organisation'
  $field_bases['field_organisation'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_organisation',
    'indexes' => array(
      'format' => array(
        0 => 'format',
      ),
    ),
    'locked' => 0,
    'module' => 'text',
    'settings' => array(
      'max_length' => 255,
    ),
    'translatable' => 0,
    'type' => 'text',
  );

  return $field_bases;
}
