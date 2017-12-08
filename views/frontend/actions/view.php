<?php
/* @var $this yii\web\View */
/* @var $model app\models\Actions */
?>

<div class="blog-post single">
	<h3 class="post-title"><?= $model->title ?></h3>
	<div class="post-text">
		 <?= $model->content ?>
	</div>
	<div class="post-meta">
		<small>Акция действует с <?= $model->date_from ?> до <?= $model->date_to ?></small>
	</div>
	<div class="divider"></div>
	<a href="/actions/">Все акции</a>
</div>
