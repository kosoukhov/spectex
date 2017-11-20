<?php

/**
 * Configuration file for the "backend" (web/admin.php) web application
 */
return yii\helpers\ArrayHelper::merge(
		require __DIR__ . '/web.php', [
		'controllerNamespace' => 'app\controllers\backend',
		'viewPath' => '@app/views/backend',
		'components' => [
			'user' => [
				'identityClass' => 'app\models\User',
				'enableAutoLogin' => false,
			],
		]
	]
);
