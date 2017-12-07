<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\FrontAsset;
use yii\helpers\Url;

$appAsset = AppAsset::register($this);
$frontAsset = FrontAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?= Yii::$app->params['siteDescription'] ?>">
		<meta name="author" content="Vadim Kosoukhov">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="favicon.ico">
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>				
		<?php $this->head() ?>
	</head>

	<body class="color-blue">
		<?php $this->beginBody() ?>
		<?= Yii::$app->params['counters']['yandex'] ?>
		<!-- Loader -->
		<?php $this->beginContent('@app/views/frontend/layouts/_loader.php'); ?>
		<?php $this->endContent(); ?>
		<!-- //Loader -->
		<!-- Header -->
		<header class="page-header header-sticky">
			<nav class="navbar" id="slide-nav">
				<div class="container">
					<div class="header-info-mobile">
						<div class="header-info-mobile-inside">
							<p><i class="icon icon-locate"></i>Московская обл., городской округ Домодедово, Ям с., ул. Почтовая</p>
							<p><i class="icon icon-phone"></i>+7 (985) 226-26-54,  +7 (903) 500-88-58</p>
							<p><i class="icon icon-clock"></i>Пон-Вск: 09:00 - 19:00</p>
							<p><i class="icon icon-email"></i><a href="mailto:<?= Yii::$app->params['siteMail'] ?>"><?= Yii::$app->params['siteMail'] ?></a></p>
						</div>
					</div>
					<div class="header-row">
						<div class="header-info-toggle"><i class="icon-arrow_down js-info-toggle"></i></div>					
						<div class="logo">
							<a href="index">
								<?php $this->beginContent('@app/views/frontend/layouts/_logo.php'); ?>
								<?php $this->endContent(); ?>
							</a>
						</div>
						<div class="header-right">
							<button type="button" class="navbar-toggle"><i class="icon icon-lines-menu"></i></button>
							<div class="header-right-top">
								<div class="address">Часы работы: <span class="custom-color">09:00 - 19:00</span></div>
								<span class="appointment">Автосервис VAG</span>
							</div>
							<div class="header-right-bottom">
								<div class="header-phone"><span class="text">Телефон для записи:</span><span class="phone-number">+7<span class="code"> 985 </span>226-26-54</span>
								</div>
							</div>
						</div>
					</div>
					<div id="slidemenu">
						<div class="row">
							<div class="col-md-12">
								<div class="close-menu"><i class="icon-close-cross"></i></div>
								<?php
								$menuItems = 
								[
									[
										'label' => '<span>Главная</span>', 
										'url' => ['/index'], 
										'active'=> Yii::$app->request->getQueryParam('page') == 'index'
									],
									[
										'label' => '<span>Дилерская диагностика</span>', 
										'url' => ['/diag'],
										'active'=> Yii::$app->request->getQueryParam('page') == 'diag'
									],
									[
										'label' => '<span>Техобслуживание</span>', 
										'url' => ['/techobslug'],
										'active'=> Yii::$app->request->getQueryParam('page') == 'techobslug'
									],
									[
										'label' => '<span>Услуги</span>', 
										'url' => ['/#'],
										'active'=> in_array(Yii::$app->request->getQueryParam('page'), ['zamena', 'tire', 'camber', 'conditioner', 'heater']),
										'items' => [
											['label' => 'Замена сцепления DSG', 'url'  => ['/zamena']],
											['label' => 'Шиномонтаж', 'url'  => ['/tire']],
											['label' => 'Сход-развал', 'url'  => ['/camber']],
											['label' => 'Заправка и ремонт кондиционера', 'url'  => ['/conditioner']],
											['label' => 'Отопители EBERSPACHER и WEBASTO', 'url'  => ['/heater']],
										],
									],
									[
										'label' => '<span>Новости</span>', 
										'url' => ['/news'], 
										'active'=>Yii::$app->controller->id == 'news'
									],
									[
										'label' => '<span>Акции</span>', 
										'url' => ['/actions'], 
										'active'=>Yii::$app->controller->id == 'actions'
									],
									[
										'label' => '<span>Контакты</span>', 
										'url' => ['/contacts'],
										'active'=> Yii::$app->request->getQueryParam('page') == 'contacts'
									],
								];

								echo Nav::widget([
									'options' => ['class' => 'navbar-nav'],
									'items' => $menuItems,
									'encodeLabels' => false,
									'activateParents' => true,
								]);
								?>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<!-- // Header -->
		<!-- Content  -->
		<div id="pageTitle">
			<div class="container">
				<!-- Breadcrumbs Block -->
				<div class="breadcrumbs">
					<?=
					Breadcrumbs::widget([
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
						'homeLink' => ['label' => 'Главная', 'url' => Url::to('index')],
					])
					?>
				</div>
				<!-- //Breadcrumbs Block -->
				<h1><?= Html::encode($this->title) ?></h1>
			</div>
		</div>
		<div id="pageContent">
			<!-- Services -->
			<div class="block">
				<div class="container">
					<?= Alert::widget() ?>
					<?= $content ?>
				</div>
			</div>
			<!-- //Services -->
			<!-- Services List Block -->
			<div class="block bg-1">
				<div class="container">
					<h2 class="h-lg text-center">Обслуживание и <span class="color">ремонт</span></h2>
					<p class="info text-center">Услуги нашего авто-сервиса VOLKSWAGEN, AUDI, SEAT в Домодедово:</p>
					<div class="row" id="slideMobile">
						<div class="col-sm-6 col-md-4">
							<ul class="marker-list">
								<li>Общий авторемонт и обслуживание</li>
								<li>Ремонт и замена коробки передач</li>
								<li>Дилерское обслуживание</li>
								<li>Ремонт и замена тормозов</li>
								<li>Ремонт кондиционера VAG</li>
								<li>Ремонт и замена шин</li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-4 view-more-mobile">
							<ul class="marker-list">
								<li>Ремонт топливной системы</li>
								<li>Ремонт выхлопной системы</li>
								<li>Техническое обслуживание системы охлаждения двигателя</li>
								<li>Электрическая диагностика</li>
								<li>Регулировка углов установки колес</li>
								<li>Компьютерное диагностическое тестирование</li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-4 view-more-mobile view-more-tablet">
							<ul class="marker-list">
								<li>Профилактическое обслуживание автомобиля</li>
								<li>Дилерская диагностика</li>
								<li>Замена масла</li>
								<li>Обслуживание тормозной системы</li>
								<li>Ремонти системы охлаждения двигателя</li>
								<li>Диагностика рулевого управления и подвески</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Services List Block -->
		<!-- // Content  -->
		<!-- Footer -->
		<div class="page-footer">
			<div class="footer-content">
				<div class="footer-col-left">
					<div class="inside">
						<div class="footer-phone">
							<h2 class="h-phone">Телефоны:<br><span class="number">+7 (985) 226-26-54,<br>+7 (903) 500-88-58</span></h2>
						</div>
						<div class="contact-info">
							<i class="icon icon-locate"></i>Московская обл., городской округ Домодедово, Ям с., ул. Почтовая
						</div>
						<div class="contact-info">
							<i class="icon icon-clock"></i>Понедельник-Воскресенье <span class="color">09:00 - 19:00</span>
						</div>
						<div class="contact-info"><i class="icon icon-email"></i><a href="mailto:<?= Yii::$app->params['siteMail'] ?>"><?= Yii::$app->params['siteMail'] ?></a></div>
					</div>
				</div>
				<div class="footer-col-right">
					<div id="footer-map" class="footer-map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6cf8dc28c713e6e5129a6b40eb98e491fedaf41ba979bbd26322ed6a309f7749&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="copyright">&copy; spectex.su <?= date('Y') ?>,<span class="clearfix visible-xs"></span>&nbsp;<?= Yii::powered() ?></div>
				</div>
			</div>
		</div>	
		<!-- //Footer -->
		<?php $this->endBody() ?>
	</body>

</html>
<?php $this->endPage() ?>