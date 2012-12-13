<?php

$mainConfig = include dirname(__FILE__) . '/main.php';

return array(
	'basePath' => $mainConfig['basePath'],
	'name'     => $mainConfig['name'],
	'import'   => $mainConfig['import'],

	'components' => array(
		'cache'       => $mainConfig['components']['cache'],
		'db'          => $mainConfig['components']['db'],
		'authManager' => $mainConfig['components']['authManager'],
	),
    
    'commandMap' => array(
        'migrate' => array(
            'class'        => 'application.commands.ChMigrateCommand',
            'templateFile' => 'application.migrations.template',
        ),
    ),
    
	'params' => $mainConfig['params'],
);