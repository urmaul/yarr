<?php

$config = array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name' => 'Yarr',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.components.controllers.*',
	),

	'modules'=>array(
        'node',
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'urlManager'=>array(
			'showScriptName' => false,
			'urlFormat' => 'path',
			'rules'=>array(
				'' => 'site/index',
                
                'node/<slug>'=>'node/frontend/index',
                
                'admin/<module>' => '<module>/backend/index',
                'admin/<module>/<action>' => '<module>/backend/<action>',
                
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yarr',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
            'tablePrefix' => '',
			'schemaCachingDuration' => YII_DEBUG ? 86400 : 0,
		),
        
        'viewRenderer' => array(
            'class' => 'ext.twig-renderer.ETwigViewRenderer',
            'fileExtension' => '.twig',
        ),
        
		'clientScript'=>array(
			'packages' => array(
				/*'jquery' => array( // Google CDN
					'baseUrl' => 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/',
					'js' => array(YII_DEBUG ? 'jquery.js' : 'jquery.min.js'),
				),*/
				/*'jquery' => array( // Yandex CDN
					'baseUrl' => 'http://yandex.st/jquery/1.7.2/',
					'js' => array(YII_DEBUG ? 'jquery.js' : 'jquery.min.js'),
				),*/
				'jquery' => array( // jQuery CDN - provided by (mt) Media Temple
					'baseUrl' => 'http://code.jquery.com/',
					'js' => array(YII_DEBUG ? 'jquery-1.7.2.js' : 'jquery-1.7.2.min.js'),
				),
			),
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),

	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);

// Apply local config modifications
@include dirname(__FILE__) . '/main-local.php';

return $config;
