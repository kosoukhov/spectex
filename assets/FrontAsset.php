<?php

/**
 * JS & CSS for frontend
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class FrontAsset extends AssetBundle {

	public $sourcePath = '@app/views/frontend/';
	
	public $css = [
		'css/animate.min.css',
		'css/slick.css',
/*Enable for debug*/
//		'css/inline_css.css',
//		'css/custom.css',
//		'css/color-blue.css',
//		'css/style.css',
/*Create by purifycss */
		YII_ENV_DEV ? 'css/front.css' : 'css/front.min.css',
	];
	public $js = [
		'js/slick.js',
		'js/moment.js',
		'js/custom.js',
	];
	public $depends = [
		'app\assets\AppAsset',
	];
	public $jsOptions = [
		'position' => View::POS_HEAD
	];

}
