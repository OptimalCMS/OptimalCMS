<?php

$file = __DIR__ . '/config/site.json';
$json = file_get_contents($file);
$site = json_decode($json);
function loadPlugins()
	{
		$plugins = $this->rootDir . '/plugins';
          	foreach (glob($plugins . '/*', GLOB_ONLYDIR) as $dir) {
			if (file_exists($dir . '/' . basename($dir) . '.php')) {
				include $dir . '/' . basename($dir) . '.php';
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title><?= $site->title; ?></title>
</head>
<body>

<?= $site->description; ?>


</body>
</html>
