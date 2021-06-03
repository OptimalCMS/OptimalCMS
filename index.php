<?php
$file = __DIR__ . '/config/site.json';
$json = file_get_contents($file);
$site = json_decode($json);

class oCMS {
	
	function loadPlugins()
	{
		$plugins = $this->rootDir . '/plugins';
		foreach (glob($plugins . '/*', GLOB_ONLYDIR) as $dir) {
			if (file_exists($dir . '/' . basename($dir) . '.php')) {
				include $dir . '/' . basename($dir) . '.php';
			}
		}
	}
	
	function loadTheme()
	{
		$location = $this->rootDir . '/themes/' . $this->get('config', 'theme');
		if (file_exists($location . '/functions.php')) {
			require_once $location . '/functions.php';
		}
		require_once $location . '/theme.php';
	}
