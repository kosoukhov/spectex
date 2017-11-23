<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

	<?php $form = ActiveForm::begin(); ?>

	<?php //$form->field($model, 'id')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

	<?php
	echo $form->field($model, 'body')->widget(Widget::className(), [
		'settings' => [
			'lang' => 'ru',
			'minHeight' => 400,
			'plugins' => [
				'clips',
				'fullscreen'
			],
			'imageUpload' => Url::to(['/page/image-upload'])
		]
	]);
	?>

    <div class="form-group">
		<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

	<?php 
	ActiveForm::end(); 
	
	//FIXME: BUG in Imperavi Editor with jQuery 3.0, create legacy function (back to jQuery 2.0)
	$script = <<< JS
$(function () {
    $.fn.size = function () {
        return this.length;
    }
})
JS;
	
	$this->registerJs($script, yii\web\View::POS_READY);

	?>

</div>
