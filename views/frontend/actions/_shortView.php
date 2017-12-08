<?php
/* @var $model app\models\Actions */
?>

<div class="testimonial-card">
	<div class="testimonial-card-title">
		<h5><?= $model->title ?></h5>
	</div>
	<div class="testimonial-card-text"><?= $model->content ?></div>
	<div class="testimonial-card-rating">
		<small>Акция действует с <?= $model->date_from ?> до <?= $model->date_to ?></small>
		<a href="/actions/<?= $model->id ?>" class="small text-muted">Открыть акцию</a>
	</div>
</div>