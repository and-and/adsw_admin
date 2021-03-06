<?php
/**
 * @file
 * adsw_stat.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_pages().
 */
function adsw_stat_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'statistics';
  $page->task = 'page';
  $page->admin_title = 'Statistics';
  $page->admin_description = '';
  $page->path = 'admin/stats/!uid/!zoneid/!bannerid';
  $page->access = array();
  $page->menu = array(
    'type' => 'normal',
    'title' => 'Upload statistics',
    'name' => 'management',
    'weight' => '0',
    'parent' => array(
      'type' => 'none',
      'title' => '',
      'name' => 'navigation',
      'weight' => '0',
    ),
  );
  $page->arguments = array(
    'uid' => array(
      'id' => 1,
      'identifier' => 'User: ID',
      'name' => 'entity_id:user',
      'settings' => array(),
    ),
    'zoneid' => array(
      'id' => 1,
      'identifier' => 'Field collection item: ID',
      'name' => 'entity_id:field_collection_item',
      'settings' => array(),
    ),
    'bannerid' => array(
      'id' => 2,
      'identifier' => 'Field collection item: ID 2',
      'name' => 'entity_id:field_collection_item',
      'settings' => array(),
    ),
  );
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_statistics__panel_context_0c7cdfbb-1b70-43a3-9812-cfc26028265d';
  $handler->task = 'page';
  $handler->subtask = 'statistics';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'User',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'context_exists',
          'settings' => array(
            'exists' => '0',
          ),
          'context' => 'argument_entity_id:user_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '8b35182c-d2cb-46c1-bdc9-f183d5566bc0';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-34bb0b02-040a-4050-b8ed-11b9bb1033a3';
    $pane->panel = 'middle';
    $pane->type = 'adsw_stat_select_user';
    $pane->subtype = 'adsw_stat_select_user';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '34bb0b02-040a-4050-b8ed-11b9bb1033a3';
    $display->content['new-34bb0b02-040a-4050-b8ed-11b9bb1033a3'] = $pane;
    $display->panels['middle'][0] = 'new-34bb0b02-040a-4050-b8ed-11b9bb1033a3';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_statistics__panel_context_3d95f4d1-55c4-4d24-a238-304850f16350';
  $handler->task = 'page';
  $handler->subtask = 'statistics';
  $handler->handler = 'panel_context';
  $handler->weight = 1;
  $handler->conf = array(
    'title' => 'Zone',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'context_exists',
          'settings' => array(
            'exists' => '1',
          ),
          'context' => 'argument_entity_id:user_1',
          'not' => FALSE,
        ),
        1 => array(
          'name' => 'context_exists',
          'settings' => array(
            'exists' => '0',
          ),
          'context' => 'argument_entity_id:field_collection_item_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '8b35182c-d2cb-46c1-bdc9-f183d5566bc0';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-9e3e12d1-2fce-4204-bc15-06e2a2ec1707';
    $pane->panel = 'middle';
    $pane->type = 'adsw_stat_select_zone';
    $pane->subtype = 'adsw_stat_select_zone';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '9e3e12d1-2fce-4204-bc15-06e2a2ec1707';
    $display->content['new-9e3e12d1-2fce-4204-bc15-06e2a2ec1707'] = $pane;
    $display->panels['middle'][0] = 'new-9e3e12d1-2fce-4204-bc15-06e2a2ec1707';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_statistics__panel_context_3d6ccf8c-7720-4f4b-8c1b-906d5a45d812';
  $handler->task = 'page';
  $handler->subtask = 'statistics';
  $handler->handler = 'panel_context';
  $handler->weight = 2;
  $handler->conf = array(
    'title' => 'banner',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'context_exists',
          'settings' => array(
            'exists' => '1',
          ),
          'context' => 'argument_entity_id:user_1',
          'not' => FALSE,
        ),
        1 => array(
          'name' => 'context_exists',
          'settings' => array(
            'exists' => '1',
          ),
          'context' => 'argument_entity_id:field_collection_item_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '8b35182c-d2cb-46c1-bdc9-f183d5566bc0';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-1f83d9e7-b82e-40c5-b7cf-c8eb1e0a80f6';
    $pane->panel = 'middle';
    $pane->type = 'adsw_stat_select_banner';
    $pane->subtype = 'adsw_stat_select_banner';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '1f83d9e7-b82e-40c5-b7cf-c8eb1e0a80f6';
    $display->content['new-1f83d9e7-b82e-40c5-b7cf-c8eb1e0a80f6'] = $pane;
    $display->panels['middle'][0] = 'new-1f83d9e7-b82e-40c5-b7cf-c8eb1e0a80f6';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['statistics'] = $page;

  return $pages;

}
