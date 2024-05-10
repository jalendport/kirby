<?php

return [
	'debug' => getenv('DEV_MODE') ?? false,
	'url' => getenv('APP_URL'),
	'panel' =>[
		'install' => getenv('DEV_MODE') ?? false,
		'slug' => 'admin',
	]
];
