<?php
/**
 * @package OptimalCMS
 * @author Shoaiyb Sysa
 * @see https://optimalcms.github.io
 * @license MIT
*/

/**
 * @define OptimalCMS
*/
define( 'OptimalCMS', TRUE );
define( 'SITE_DIR', __DIR__ . '/site/' );
define( 'THEME_DIR', __DIR__ . '/themes/' );
/**
 * @require Core
 * @require Functions
*/

require SITE_DIR . 'core.php';
require SITE_DIR . 'functions.php';
