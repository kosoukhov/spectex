<?php
/* @var $this yii\web\View */

$this->title = 'Акции';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-isotope">
		<?php
		foreach ($actions as $model) {
			echo $this->render('_shortView', [
				'model' => $model
			]);
		}
		?>
</div>

