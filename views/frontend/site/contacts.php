<?php
/* @var $this yii\web\View */

/* @var $contentManager yii2tech\content\Manager */

use yii\helpers\Html;

$contentManager = Yii::$app->get('pageContentManager');
$contentItem = $contentManager->get('contacts');

$this->title = $contentItem->render('title');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
	<div class="row">
		<div class="col-lg-5">

			<?= $contentItem->render('body') ?>

		</div>
	</div>
</div>
