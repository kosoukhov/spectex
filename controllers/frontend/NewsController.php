<?php

namespace app\controllers\frontend;

use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use app\models\News;

class NewsController extends \yii\web\Controller {

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
	 * Lists all News models.
	 * @return mixed
	 */
	public function actionIndex() {
		if (($news = News::find()->active()->all()) != null) {
			return $this->render('index', [
					'news' => $news,
			]);
		}

		throw new NotFoundHttpException('На сайте пока еще нет новостей.');
	}

	public function actionView($id) {
		return $this->render('view', [
				'model' => $this->findModel($id),
		]);
	}

	/**
	 * Finds the News model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return News the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = News::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}

}
