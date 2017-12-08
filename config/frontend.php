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
			'pageContentManager' => [
				'class' => 'yii2tech\content\Manager',
				'sourceStorage' => [
					'class' => 'yii2tech\content\PhpStorage',
					'filePath' => '@app/data/pages',
				],
				'overrideStorage' => [
					'class' => 'yii2tech\content\DbStorage',
					'table' => '{{%Page}}',
					'contentAttributes' => [
						'title',
						'body',
						'tag',
					],
				],
			],
			'urlManager' => [
				'enablePrettyUrl' => true,
				'showScriptName' => false,
				'normalizer' => [
					'class' => 'yii\web\UrlNormalizer',
					'collapseSlashes' => true,
					'normalizeTrailingSlash' => true,
				],
				'rules' => [
					[
						'pattern' => '/',
						'route' => 'site/load',
						'defaults' => ['page' => 'index'],
					],
					[
						//'pattern' => '<page:[\w-]+>',
						'pattern' => '<page:(camber|conditioner|contacts|diag|heater|techobslug|tire|zamena|index)>',
						'route' => '/site/load',
					],
					'<controller:[\w-]+>' => '<controller>/index',
					'<controller:[\w-]+>/<id:\d+>' => '<controller>/view/',
				
				//'<_a:(about|contacts|captcha)>' => 'site/default/<_a>',
				//'/<action:[\w-]+>' => '/site/<action>',
				//'<action:[\w-]+>' => 'site/load/<action>',
				//'site/<view:[a-zA-Z0-9-]+>' => 'site/index',
				//'<controller:[\w-]+>' => '<controller>/index',
				//'<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>' => '<controller>/<action>',
				//'robots.txt' => 'site/robots',
				],
			],
		]
		]
);
