<?php

namespace app\controllers\backend;

use Yii;
use app\models\News;
use app\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller {

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => ['index', 'create', 'view', 'update', 'delete', 'image-upload'],
						'allow' => true,
						'roles' => ['@'],
					],
					[
						'actions' => ['create', 'delete'],
						'allow' => false,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['POST'],
				],
			],
		];
	}

	public function actions() {
		return [
			'image-upload' => [
				'class' => 'vova07\imperavi\actions\UploadAction',
				'url' => Yii::$app->params['siteUrl'] . 'images/', // Directory URL address, where files are stored.
				'path' => '@app/web/images' // Or absolute path to directory where files are stored.
			],
		];
	}

	/**
	 * Lists all News models.
	 * @return mixed
	 */
	public function actionIndex() {
		$searchModel = new NewsSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single News model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id) {
		return $this->render('view', [
				'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new News model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new News();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('create', [
				'model' => $model,
		]);
	}

	/**
	 * Updates an existing News model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		}

		return $this->render('update', [
				'model' => $model,
		]);
	}

	/**
	 * Deletes an existing News model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id) {
		$model = $this->findModel($id);
		$model->deleted = 1;
		$model->update();

		return $this->redirect(['index']);
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