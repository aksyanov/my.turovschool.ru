<?php
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Личный кабинет школы Турова',
    'defaultController'=>'courses',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.widgets.*',
        'application.widgets.CoursesBox.*',
        'application.widgets.TopMenu.*',
	),

	'components'=>array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=turovschool',
            'emulatePrepare' => true,
            'username' => 'vsmile',
            'password' => 'smile4Mysql',
            'charset' => 'utf8',
		),
        'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
        ),
        'errorHandler'=>array(
            'errorAction'=>'courses/error',
        ),
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName' => false,
            'caseSensitive' => false,
            'rules'=>array(
                'courses/course/<courseName:\w+>' => 'courses/course',
                //'<controller:\w+>/<action:\w+>/<courseID:\w+>' => '<controller>/<action>',
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