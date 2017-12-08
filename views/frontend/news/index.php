<?php
/* @var $this yii\web\View */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-isotope">
		<?php
		foreach ($news as $model) {
			echo $this->render('_shortView', [
				'model' => $model
			]);
		}
		?>
</div>

