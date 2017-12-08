<?php
/* @var $model app\models\News */
?>

<div class="testimonial-card">
	<div class="testimonial-card-title">
		<h5><?= $model->title ?></h5>
	</div>
	<div class="testimonial-card-text"><?= $model->content ?></div>
	<div class="testimonial-card-rating">
		<a href="/news/<?= $model->id ?>" class="small text-muted">Полный текст</a>
	</div>
</div>