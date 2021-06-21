<?php
/**
 * @package OptimalCMS
 * @author Shoaiyb Sysa
 * @see https://optimalcms.github.io
 * @license MIT
 */


define( 'ABSPATH', __DIR__.'/' );
define( 'SYSPATH', ABSPATH.'system/' );
define( 'CONFPATH', SYSPATH.'config/' );

function siteConfig()
{
	$config = CONFPATH . 'site.json';
	$json = file_get_contents($config);
	$site = json_decode($json);
}

function siteHead()
{
	
}

function siteEnd()
{
	
}

function loadPlugins()
{
	
	$plugins = ABSPATH . 'plugins';
	foreach (glob($plugins . '/*', GLOB_ONLYDIR) as $dir) {
		if (file_exists($dir . '/' . basename($dir) . '.php')) {
			include $dir . '/' . basename($dir) . '.php';
		}
	}
}

function loadTheme()
{
	$location = ABSPATH . 'themes/' . $this->get('config', 'theme');
	if (file_exists($location . '/functions.php')) {
		require_once $location . '/functions.php';
	}
	require_once $location . '/theme.php';
}


loadPlugins();
loadTheme();

?>
