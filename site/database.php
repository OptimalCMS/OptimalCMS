<?php
if(file_exists(SITE_DIR . 'site.js')) {
  $site = json_decode(file_get_contents(SITE_DIR . 'site.js'));
}

if(file_exists(SITE_DIR . 'widgets.js')) {
  $widgets = json_decode(file_get_contents(SITE_DIR . 'widgets.js'));
}
?>
