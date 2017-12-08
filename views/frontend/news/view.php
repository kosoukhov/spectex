<?php
/* @var $this yii\web\View */
/* @var $model app\models\News */
?>

<div class="blog-post single">
	<h3 class="post-title"><?= $model->title ?></h3>
	<div class="post-text">
		 <?= $model->content ?>
	</div>
	<div class="post-meta">
		<p>Дата публикации: <?= $model->date ?></p>
	</div>
	<div class="divider"></div>
	<a href="/news/">Все новости</a>
</div>
