<?php

if(file_exists('site/site.js')) {
$db = file_get_contents('site/site.js');
$site = json_decode($db);
}

if(file_exists('site/widgets.js')) {
$contents = file_get_contents('site/widgets.js');
$widgets = json_decode($contents);
}

if(file_exists('site/posts.js')) {
$articles = file_get_contents('site/posts.js');
$posts = json_decode($articles);
}

if(file_exists('site/pages.js')) {
$statics = file_get_contents('site/pages.js');
$pages = json_decode($statics);
}
