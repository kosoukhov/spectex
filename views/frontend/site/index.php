<?php
/* @var $this yii\web\View */
/* @var $contentManager yii2tech\content\Manager */

$contentManager = Yii::$app->get('pageContentManager');
$contentItem = $contentManager->get('index');

$this->registerMetaTag([
	'name' => 'keywords',
	'content' => ($contentItem->render('tag')),
]);
$this->title = $contentItem->render('tag');
?>
<?= $contentItem->render('body') ?>