<?php
/**
 * @file
 * adswl_user.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function adsw_user_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'user-user-field_organisation'
  $field_instances['user-user-field_organisation'] = array(
    'bundle' => 'user',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'user',
    'field_name' => 'field_organisation',
    'label' => 'Organisation',
    'required' => 0,
    'settings' => array(
      'text_processing' => 0,
      'user_register_form' => 1,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'size' => 60,
      ),
      'type' => 'text_textfield',
      'weight' => 7,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Organisation');

  return $field_instances;
}
