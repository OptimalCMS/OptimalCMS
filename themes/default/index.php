<?php
if(!defined('OptimalCMS')) {
  die('OptimalCMS');
}

if(isset($_GET['amp'])) {
  require 'amp.php';
} else {
  require 'theme.php';
}
?>
