<?php
if(!defined('OptimalCMS')) {
  die('OptimalCMS');
}

$OptimalCMS = new OptimalCMS();

function add_action($where, $callback, $priority = 50) {
  global $OptimalCMS;
  if(isset($OptimalCMS)) {
    $OptimalCMS->add_action($where, $callback, $priority);
  }
}

function remove_action($where, $callback) {
  global $OptimalCMS;
  if(isset($OptimalCMS)) {
    $OptimalCMS->remove_action($where, $callback);
  }
}

function execute_action($where, $args = array()) {
  global $OptimalCMS;
  if(isset($OptimalCMS)) {
    $OptimalCMS->execute($where, $args);
  }
}

require SITE_DIR . 'database.php';
require THEME_DIR . $site->theme . '/index.php';
if(file_exists(THEME_DIR . $site->theme . '/functions.php')) {
require_once(THEME_DIR . $site->theme . '/functions.php');
}

?>
