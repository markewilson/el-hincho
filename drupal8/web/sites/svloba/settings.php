<?php

// @codingStandardsIgnoreFile

/**
 * @file
 * Drupal site-specific configuration file.
 *
 */

$databases = [];
$settings['hash_salt'] = 'pvwE9yIzg-oCb0SiNu7kwSXdNLgb8tuOUi-XorQna-PX_9FnaoobZh8vLoPSw_Oi1v3xXmHxlw';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['migrate_node_migrate_type_classic'] = FALSE;
$config_directories[CONFIG_SYNC_DIRECTORY] = '../config/sync/figueroa';
// Automatic Platform.sh settings.
if (file_exists($app_root . '/' . $site_path . '/../settings.platformsh.php')) {
    $platformsh_subsite_id = 'svloba';
    include $app_root . '/' . $site_path . '/../settings.platformsh.php';
}
// Local settings. These come last so that they can override anything.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
    include $app_root . '/' . $site_path . '/settings.local.php';
}
