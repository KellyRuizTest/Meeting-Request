<?php

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Meeting Request',
	'theme'=>'twitter_fluid',

	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1592415',
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths'=>array(
                            'bootstrap.gii',
                    ),
		),
	),

	'components'=>array(
                'bootstrap'=>array( 'class'=>'bootstrap.components.Bootstrap', ),		
                'user'=>array( 'allowAutoLogin'=>true, ),
                'authManager'=>array("class"=>"CDbAuthManager",
                                     "connectionID"=>"db",
                                    ),
/*		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			//'urlSuffix'=>'.jsp',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=meetingrequest',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),   
		'errorHandler'=>array(
			'errorAction'=>'site/error',
		),
	),

	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'kelly.ruz@samsung.com',
	),
);