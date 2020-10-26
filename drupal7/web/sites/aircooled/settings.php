<?php


$databases = array();
$update_free_access = FALSE;
$drupal_hash_salt = 'RThpBp6iGRc4oOT80B1acN86aFwZ06Szu-X55BUy9JY';
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);


$conf['404_fast_paths_exclude'] = '/\/(?:styles)|(?:system\/files)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

$conf['file_scan_ignore_directories'] = array(
  'node_modules',
  'bower_components',
);

// Include automatic Platform.sh settings.
if (file_exists(__DIR__ . '/settings.platformsh.php')) {
  require_once(__DIR__ . '/settings.platformsh.php');
}

// Include local settings. These come last so that they can override anything.
$on_platformsh = !empty($_ENV['PLATFORM_PROJECT']);
if (file_exists(__DIR__ . '/settings.local.php') && !$on_platformsh) {
  require_once(__DIR__ . '/settings.local.php');
}
