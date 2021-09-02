<?php
if(!defined('OptimalCMS')) {
  die('OptimalCMS');
}

if(isset($_GET['amp']) && file_exists('amp.php')) {
  require 'amp.php';
} else {
  require 'theme.php';
}
?>
