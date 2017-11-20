<?php

/**
 * Configuration file for the "frontend" (web/index.php) web application
 */
return yii\helpers\ArrayHelper::merge(
		require __DIR__ . '/web.php', [
		'controllerNamespace' => 'app\controllers\frontend',
		'viewPath' => '@app/views/frontend',
		'components' => [
			'user' => [
				'identityClass' => 'app\models\User',
				'enableAutoLogin' => true,
			],
			'urlManager' => [
				'enablePrettyUrl' => true,
				'showScriptName' => false,
				'rules' => [
					'/' => 'site/index',
					'<controller:[\w-]+>' => '<controller>/index',
					'<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>' => '<controller>/<action>',
					'robots.txt' => 'site/robots',
				],
			],
		]
	]
);
