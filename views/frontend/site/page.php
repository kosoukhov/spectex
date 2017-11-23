<?php
/* @var $this yii\web\View */
/* @var $contentManager yii2tech\content\Manager */

use yii\helpers\Html;

$contentManager = Yii::$app->get('pageContentManager');
$contentItem = $contentManager->get(Yii::$app->controller->actionParams['page']);

$this->title = $contentItem->render('title');
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => ($contentItem->render('tag')),
]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-page">
    <h1><?= Html::encode($this->title) ?></h1>
	<?= $contentItem->render('body') ?>
</div>
