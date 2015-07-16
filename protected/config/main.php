<?php
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Личный кабинет школы Турова',
    'defaultController'=>'site',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.widgets.*',
        'application.widgets.CoursesBox.*',
	),

	'components'=>array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=turovschool',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
		),
        'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
        ),
        'errorHandler'=>array(
            'errorAction'=>'site/error',
        ),
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName' => false,
            'caseSensitive' => false,
            'rules'=>array(

                /*'post/<id:\d+>/<title:.*?>'=>'post/view',
                'posts/<tag:.*?>'=>'post/index',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',*/

            ),
        ),

        'user'=>array(
            'class' => 'WebUser',
            'loginUrl'=>array('login'),
            'allowAutoLogin'=>true,
        )
	),

    'params'=>require(dirname(__FILE__).'/params.php'),
);