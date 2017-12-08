<?php

namespace app\controllers\frontend;

use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use app\models\Actions;

class ActionsController extends \yii\web\Controller {

	public $defaultAction = 'index';

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'actions' => ['index', 'view'],
					//'roles' => ['?']
					]
				]
			]
		];
	}

	/**
	 * Lists all Actions models.
	 * @return mixed
	 */
	public function actionIndex() {
		if (($actions = Actions::find()->active()->all()) != null) {
			return $this->render('index', [
					'actions' => $actions,
			]);
		}

		throw new NotFoundHttpException('На сайте пока еще нет акций.');
	}

	public function actionView($id) {
		return $this->render('view', [
				'model' => $this->findModel($id),
		]);
	}

	/**
	 * Finds the Actions model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Actions the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = Actions::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}

}
