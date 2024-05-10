<?php

// Load shared bootstrap
require dirname(__DIR__) . '/bootstrap.php';

define('KIRBY_HELPER_DUMP', false);

// Load and run Kirby
$kirby = new Kirby([
	'roots' => [
		'accounts' => KIRBY_BASE_PATH . '/data/accounts',
		'assets' => KIRBY_BASE_PATH . '/web/assets',
		'blueprints' => KIRBY_BASE_PATH . '/config/kirby/blueprints',
		'cache' => KIRBY_BASE_PATH . '/storage/cache',
		'config' => KIRBY_BASE_PATH . '/config/kirby',
		'content' => KIRBY_BASE_PATH . '/data/content',
		'index' => KIRBY_BASE_PATH,
		'logs' => KIRBY_BASE_PATH . '/storage/logs',
		'media' => KIRBY_BASE_PATH . '/web/media',
		'plugins' => KIRBY_BASE_PATH . '/vendor-plugins',
		'sessions' => KIRBY_BASE_PATH . '/storage/sessions',
		'site' => KIRBY_BASE_PATH . '/src',
	],
]);

echo $kirby->render();
