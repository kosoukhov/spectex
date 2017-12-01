<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\Actions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actions-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?php
	echo $form->field($model, 'content')->widget(Widget::className(), [
		'settings' => [
			'lang' => 'ru',
			'minHeight' => 400,
			'plugins' => [
				'clips',
				'fullscreen'
			],
			'imageUpload' => Url::to(['/actions/image-upload'])
		]
	]);
	?>
	
	<?php
	if (!$model->date_from){
		$model->date_from = date('Y-m-d');
	}

	echo $form->field($model, 'date_from')->widget(DatePicker::classname(), [
		'language' => 'ru',
		'dateFormat' => 'yyyy-MM-dd',
		'options' => ['class' => 'form-control'],
	]);
		
	if (!$model->date_to){
		$model->date_to = date('Y-m-d');
	}

	echo $form->field($model, 'date_to')->widget(DatePicker::classname(), [
		'language' => 'ru',
		'dateFormat' => 'yyyy-MM-dd',
		'options' => ['class' => 'form-control'],
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
