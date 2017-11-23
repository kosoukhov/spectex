<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--p>
	<?= Html::a('Добавить страницу', ['create'], ['class' => 'btn btn-success']) ?>
    </p-->

	<?=
	GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			'id',
			'title',
			'tag',
			//'body:html',
			[
				'class' => 'yii\grid\ActionColumn',
				'template' => '{update} {switch}',
				'buttons' => [
					'switch' => function ($url, $model, $key) {
						$glyph = 'glyphicon-eye-open';
						if (stripos($model->id, Yii::$app->params['pageSwithText'])) {
							$glyph = 'glyphicon-eye-close';
						}
						return Html::a(
								'<span class="glyphicon ' . $glyph . '"></span>', $url);
					},
				],
			],
		],
	]);
	?>
</div>
