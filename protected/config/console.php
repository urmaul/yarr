<?php

$mainConfig = include dirname(__FILE__) . '/main.php';

return array(
	'basePath' => $mainConfig['basePath'],
	'name'     => $mainConfig['name'],
	'import'   => $mainConfig['import'],

	'components' => array(
		'db'          => $mainConfig['components']['db'],
		'authManager' => $mainConfig['components']['authManager'],
	),
    
    'commandMap' => array(
        'migrate' => array(
            'class' => 'system.cli.commands.MigrateCommand',
            'templateFile' => 'application.migrations.template',
        ),
    ),
    
	'params' => $mainConfig['params'],
);