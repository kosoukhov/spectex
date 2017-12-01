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
//		'css/inline_css_pf.css',
//		'css/custom_pf.css',
//		'css/color-blue_pf.css',
//		'css/style_pf.css',
/**
 * Create by purifycss 
 * purifycss .\domains\yii2_basic_yii2tech_content\views\frontend\css\*_pf.css index.html -m -i -o front.min.css
 * purifycss .\domains\yii2_basic_yii2tech_content\views\frontend\css\*_pf.css index.html -i -o front.css
 */
		YII_ENV_DEV ? 'css/front.min.css' : 'css/front.min.css',
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
