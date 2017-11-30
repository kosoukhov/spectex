<?php

namespace app\controllers\frontend;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\Page;

class SiteController extends Controller {

	private $_menuItems;

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	public function beforeAction($action) {
		if (!parent::beforeAction($action)) {
			return false;
		}

		$this->_menuItems = $this->_getMenuItems();

		return true;
	}

	private function _getMenuItems() {
		$menuItems = ArrayHelper::toArray(Page::find()->noIndex()->orderBy(['position' => SORT_ASC])->all(), [
				'app\models\Page' => [
					'label' => 'title',
					'url' => [Url::to('id')],
				],
		]);
		
		foreach ($menuItems as $k => $v){
			if($v['url'] == Yii::$app->getRequest()->getQueryParam('page')){
				$menuItems[$k]['active'] = true;
			}
		}

		return $menuItems;
	}

	/**
	 * Displays static pages.
	 *
	 * @return string
	 */
	public function actionLoad($page) {
		$renderPage = 'page';

		if (in_array($page, ['index', 'contacts'])) {
			$renderPage = $page;
		}

		$this->view->params['menuItems'] = $this->_menuItems;

		return $this->render($renderPage);
	}

}
