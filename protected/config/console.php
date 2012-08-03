<?php

$mainConfig = include dirname(__FILE__) . '/main.php';

return array(
	'basePath' => $mainConfig['basePath'],
	'name'     => $mainConfig['name'],
	'import'   => $mainConfig['import'],

	'components'=>array(
		'db' => $mainConfig['components']['db'],
		'authManager' => $mainConfig['components']['authManager'],
	),
);