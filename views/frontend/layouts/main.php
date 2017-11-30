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
		<meta name="description" content="html 5 template">
		<meta name="author" content="Vadim Kosoukhov">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="favicon.ico">
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>				
		<?php $this->head() ?>
	</head>

	<body class="color-blue">
		<?php $this->beginBody() ?>
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
							<p><i class="icon icon-locate"></i>2605 Caton Hill Road, Woodbridge, VA 22192</p>
							<p><i class="icon icon-phone"></i>1-800-123-4567,  Fax: 123-456-7890</p>
							<p><i class="icon icon-clock"></i>Mon-Sat: 7:00 am – 6:00 pm</p>
							<p><i class="icon icon-email"></i><a href="mailto:officeone@youremail.com">officeone@youremail.com</a></p>
						</div>
					</div>
					<div class="header-row">
						<div class="header-info-toggle"><i class="icon-arrow_down js-info-toggle"></i></div>					<div class="logo">
							<a href="index.html">
								<?php $this->beginContent('@app/views/frontend/layouts/_logo.php'); ?>
								<?php $this->endContent(); ?>
							</a>
						</div>
						<div class="header-right">
							<button type="button" class="navbar-toggle"><i class="icon icon-lines-menu"></i></button>
							<div class="header-right-top">
								<div class="address">
									Monday-Saturday <span class="custom-color">7:00AM - 6:00PM</span>
								</div>
								<a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
							</div>
							<div class="header-right-bottom">
								<div class="header-phone"><span class="text">SCHEDULE YOUR APPOINTMENT TODAY</span><span class="phone-number">1-<span class="code">800</span>-123-4567</span>
								</div>
							</div>
						</div>
					</div>
					<div id="slidemenu">
						<div class="row">
							<div class="col-md-11">
								<div class="close-menu"><i class="icon-close-cross"></i></div>
								<ul class="nav navbar-nav">
									<li><a href="index.html"><span>Home</span></a></li>
									<li><a href="about.html"><span>About Us</span></a></li>
									<li class="dropdown active">
										<a href="services.html" data-toggle="dropdown" data-submenu=""><span>Services</span><span class="ecaret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="services-1.html">Preventative Maintenance</a></li>
											<li><a href="services-2.html">Brake Repair & Service</a></li>
											<li><a href="services-3.html">Transmission Service & Repair</a></li>
											<li><a href="services-4.html">Tires & Wheels</a></li>
											<li><a href="services-5.html">Engine Services</a></li>
											<li><a href="services-6.html">Exhaust System</a></li>
										</ul>
									</li>
									<li><a href="coupon.html"><span>Pricing & Coupons</span></a></li>
									<li class="dropdown">
										<a href="blog.html" data-toggle="dropdown" data-submenu=""><span>Blog</span><span class="ecaret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="blog.html">Blog Classic</a></li>
											<li><a href="blog-card.html">Blog Post Card</a></li>
											<li><a href="blog-single.html">Blog Single post</a></li>
										</ul>
									</li>
									<li><a href="gallery.html"><span>Gallery</span></a></li>
									<li><a href="testimonials.html"><span>Testimonials</span></a></li>
									<li><a href="faq.html"><span>FAQ</span></a></li>
									<li><a href="shop.html"><span>Shop</span></a></li>
									<li><a href="contact.html"><span>Contacts</span></a></li>
								</ul>
							</div>
							<div class="col-md-1">
								<div class="search-container">
									<input placeholder="search" type="text">
									<a class="button">
										<i class="icon icon-search"></i>
									</a>
								</div>
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
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Services</li>
					</ul>
				</div>
				<!-- //Breadcrumbs Block -->
				<h1>Services</h1>
			</div>
		</div>
		<div id="pageContent">
			<!-- Services -->
			<div class="block">
				<div class="container">
					<?= Alert::widget() ?>
					<?= $content ?>
					<h2 class="h-lg text-center">What We Do</h2>
					<p class="info text-center">We offer full service auto repair & maintenance</p>
					<div class="tab-services">
						<div class="tab-content">
							<div class="row services-alt tab-pane fade in active" id="services1">
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-1.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-01.jpg" alt=""></a>
										<i class="icon icon-oil"></i>
									</div>
									<div class="caption">
										<h3 class="title" style="height: 72px;">Preventative Maintenance</h3>
										<div class="text" style="height: 78px;">
											The best way to minimize breakdowns is doing routine maintenance
										</div>
										<a href="services-1.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-2.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-02.jpg" alt=""></a>
										<i class="icon icon-disc-brake"></i>
									</div>
									<div class="caption">
										<h3 class="title" style="height: 72px;">Brake<br>Repair & Service</h3>
										<div class="text" style="height: 78px;">
											Brakes wear out over time requiring service
										</div>
										<a href="services-2.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-3.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-03.jpg" alt=""></a>
										<i class="icon icon-gearshift"></i>
									</div>
									<div class="caption">
										<h3 class="title" style="height: 72px;">Transmission Service & Repair</h3>
										<div class="text" style="height: 78px;">
											The transmission is complicated and important components of your car
										</div>
										<a href="services-3.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-4.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-04.jpg" alt=""></a>
										<i class="icon icon-car-wheel"></i>
									</div>
									<div class="caption">
										<h3 class="title" style="height: 36px;">TIRES & WHEELS</h3>
										<div class="text" style="height: 78px;">
											The best way to minimize breakdowns is doing routine maintenance
										</div>
										<a href="services-4.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-5.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-05.jpg" alt=""></a>
										<i class="icon icon-engine"></i>
									</div>
									<div class="caption">
										<h3 class="title" style="height: 36px;">ENGIN SERVICES</h3>
										<div class="text" style="height: 78px;">
											Brakes wear out over time requiring service
										</div>
										<a href="services-5.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-6.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-06.jpg" alt=""></a>
										<i class="icon icon-exhaust-pipe"></i>
									</div>
									<div class="caption">
										<h3 class="title" style="height: 36px;">Exhaust System</h3>
										<div class="text" style="height: 78px;">
											The transmission is complicated and important components of your car
										</div>
										<a href="services-6.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
							</div>
							<div class="row services-alt tab-pane fade" id="services2">
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-3.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-03.jpg" alt=""></a>
										<i class="icon icon-gearshift"></i>
									</div>
									<div class="caption">
										<h3 class="title">Transmission Service & Repair</h3>
										<div class="text">
											The transmission is complicated and important components of your car
										</div>
										<a href="services-3.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-4.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-04.jpg" alt=""></a>
										<i class="icon icon-car-wheel"></i>
									</div>
									<div class="caption">
										<h3 class="title">TIRES & WHEELS</h3>
										<div class="text">
											The best way to minimize breakdowns is doing routine maintenance
										</div>
										<a href="services-4.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-5.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-05.jpg" alt=""></a>
										<i class="icon icon-engine"></i>
									</div>
									<div class="caption">
										<h3 class="title">ENGIN SERVICES</h3>
										<div class="text">
											Brakes wear out over time requiring service
										</div>
										<a href="services-5.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-1.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-01.jpg" alt=""></a>
										<i class="icon icon-oil"></i>
									</div>
									<div class="caption">
										<h3 class="title">Preventative Maintenance</h3>
										<div class="text">
											The best way to minimize breakdowns is doing routine maintenance
										</div>
										<a href="services-1.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-2.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-02.jpg" alt=""></a>
										<i class="icon icon-disc-brake"></i>
									</div>
									<div class="caption">
										<h3 class="title">Brake<br>Repair & Service</h3>
										<div class="text">
											Brakes wear out over time requiring service
										</div>
										<a href="services-2.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-6.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-06.jpg" alt=""></a>
										<i class="icon icon-exhaust-pipe"></i>
									</div>
									<div class="caption">
										<h3 class="title">Exhaust System</h3>
										<div class="text">
											The transmission is complicated and important components of your car
										</div>
										<a href="services-6.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
							</div>
							<div class="row services-alt tab-pane fade" id="services3">
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-5.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-05.jpg" alt=""></a>
										<i class="icon icon-engine"></i>
									</div>
									<div class="caption">
										<h3 class="title">ENGIN SERVICES</h3>
										<div class="text">
											Brakes wear out over time requiring service
										</div>
										<a href="services-5.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-6.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-06.jpg" alt=""></a>
										<i class="icon icon-exhaust-pipe"></i>
									</div>
									<div class="caption">
										<h3 class="title">Exhaust System</h3>
										<div class="text">
											The transmission is complicated and important components of your car
										</div>
										<a href="services-6.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-2.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-02.jpg" alt=""></a>
										<i class="icon icon-disc-brake"></i>
									</div>
									<div class="caption">
										<h3 class="title">Brake<br>Repair & Service</h3>
										<div class="text">
											Brakes wear out over time requiring service
										</div>
										<a href="services-2.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-1.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-01.jpg" alt=""></a>
										<i class="icon icon-oil"></i>
									</div>
									<div class="caption">
										<h3 class="title">Preventative Maintenance</h3>
										<div class="text">
											The best way to minimize breakdowns is doing routine maintenance
										</div>
										<a href="services-1.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-3.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-03.jpg" alt=""></a>
										<i class="icon icon-gearshift"></i>
									</div>
									<div class="caption">
										<h3 class="title">Transmission Service & Repair</h3>
										<div class="text">
											The transmission is complicated and important components of your car
										</div>
										<a href="services-3.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
								<div class="services-block-alt col-xs-6 col-sm-6 col-md-4">
									<div class="image">
										<a href="services-4.html" class="image-scale-color"><img src="<?= $frontAsset->baseUrl ?>/tpl_img/services-img-04.jpg" alt=""></a>
										<i class="icon icon-car-wheel"></i>
									</div>
									<div class="caption">
										<h3 class="title">TIRES & WHEELS</h3>
										<div class="text">
											The best way to minimize breakdowns is doing routine maintenance
										</div>
										<a href="services-4.html" class="services-link icon-arrowhead-pointing-to-the-right"></a>
									</div>
								</div>
							</div>
						</div>
						<ul class="nav nav-pills">
							<li class="active"><a data-toggle="pill" href="#services1">1</a></li>
							<li><a data-toggle="pill" href="#services2">2</a></li>
							<li><a data-toggle="pill" href="#services3">3</a></li>
						</ul>
					</div>
					<div class="divider-lg"></div>
					<div class="text-center">
						<h2 class="h-lg">Vehicle damage? <span class="color">We'll fix it</span></h2>
						<p class="info">We specialise in repairing accident damage to vehicles. In fact, we're the second largest accident damage repair network.</p>
						<h2 class="h-phone">Call: 1-800-123-4567</h2>
						<div class="btn-inline"><a class="btn btn-invert" href="contact.html"><span>Need help?</span></a></div>
					</div>
				</div>
			</div>
			<!-- //Services -->
			<!-- Services List Block -->
			<div class="block bg-1">
				<div class="container">
					<h2 class="h-lg text-center">Our <span class="color">Services</span></h2>
					<p class="info text-center">Below are some of the many auto repair services we offer:</p>
					<div class="row" id="slideMobile">
						<div class="col-sm-6 col-md-4">
							<ul class="marker-list">
								<li>FREE Loaner Cars</li>
								<li>FREE Shuttle Service</li>
								<li>General Auto Repair & Maintenance</li>
								<li>Transmission Repair & Replacement</li>
								<li>Manufacturer Recommended Service</li>
								<li>Brake Repair and Replacement</li>
								<li>Air Conditioning A/C Repair</li>
								<li>Tire Repair and Replacement</li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-4 view-more-mobile">
							<ul class="marker-list">
								<li>Fuel System Repair</li>
								<li>Exhaust System Repair</li>
								<li>Engine Cooling System Maintenance</li>
								<li>Electrical Diagnostics</li>
								<li>Starting and Charging Repair</li>
								<li>Wheel Alignment</li>
								<li>CV Axles</li>
								<li>Computer Diagnostic Testing
								</li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-4 view-more-mobile view-more-tablet">
							<ul class="marker-list">
								<li>Vehicle Preventative Maintenance</li>
								<li>State Emissions Inspection</li>
								<li>Emission Repair Facility</li>
								<li>Tune Up</li>
								<li>Oil Change</li>
								<li>Brake Job / Brake Service</li>
								<li>Engine Cooling System Flush &amp; Repair</li>
								<li>Steering and Suspension Work</li>
							</ul>
						</div>
					</div>
					<div class="text-center"><a href="#slideMobile" class="view-more-link color"><span class="more">All Services</span><span class="less">Hide All Services</span></a>
					</div>
				</div>
			</div>
			<!-- //Services List Block -->
			<!-- Block -->
			<div class="block">
				<div class="container">
					<div class="text-center">
						<h2 class="h-lg">Want to Get <span class="color">Quality Car Repair</span> or Maintenance</h2>
						<p class="info">Find out How Much Cost Services of Car Repair Service</p>
						<div class="btn-inline">
							<a class="btn btn-invert" href="#" data-toggle="modal" data-target="#appointmentForm"><span>Appointment</span></a>
							<div class="form-popup-wrap">
								<a class="btn form-popup-link" href="#"><span>Get Quote</span></a>
								<div class="form-popup"><div class="form-popup-close"><i class="icon-close-cross"></i></div>
									<form id="quote-form" method="post">
										<div id="successQuote" class="successform">
											<p>Your message was sent successfully!</p>
										</div>
										<div id="errorQuote" class="errorform">
											<p>Something went wrong, try refreshing and submitting the form again.</p>
										</div>
										<div class="form-inline">
											<input type="text" name="name" class="form-control input-custom" value="" placeholder="Your Name">
										</div>
										<div class="form-inline">
											<div>
												<input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
											</div>
											<div>
												<input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
											</div>
										</div>
										<div class="form-inline">
											<div class="select-wrapper">
												<select name="select1" class="input-custom">
													<option value="Vehicle">Vehicle</option>
													<option value="Car">Car</option>
													<option value="Bike">Bike</option>
												</select>
											</div>
											<div class="select-wrapper">
												<select name="select2" class="input-custom">
													<option value="2000">2000</option>
													<option value="2001">2001</option>
													<option value="2002">2002</option>
													<option value="2003">2003</option>
													<option value="2004">2004</option>
													<option value="2005">2005</option>
													<option value="2006">2006</option>
													<option value="2007">2007</option>
													<option value="2008">2008</option>
													<option value="2009">2009</option>
													<option value="2010">2010</option>
												</select>
											</div>
										</div>
										<div class="form-inline">
											<div class="select-wrapper">
												<select name="select3" class="input-custom">
													<option value="">Choose service</option>
													<option value="Preventative Maintenance">Preventative Maintenance</option>
													<option value="Brake Repair">Brake Repair & Service</option>
													<option value="Transmission Service">Transmission Service & Repair</option>
												</select>
											</div>
										</div>
										<div class="form-inline">
											<textarea name="message" class="form-control textarea-custom" placeholder="Your comment"></textarea>
										</div>
										<button type="submit" id="submit" class="btn btn-lg btn-full"><span>get a quote</span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- // Block -->
		</div>
		<!-- // Content  -->
		<!-- Footer -->
		<div class="page-footer">
			<div class="footer-content">
				<div class="footer-col-left">
					<div class="inside">
						<div class="footer-phone">
							<h2 class="h-phone">Call: <span class="number">1-800-1234567</span></h2>
						</div>
						<div class="contact-info"><i class="icon icon-locate"></i>2605 Caton Hill Road, Woodbridge,
							<br> VA 22192
						</div>					<div class="contact-info"><i class="icon icon-clock"></i>Monday-Saturday <span class="color">7:00AM - 6:00PM</span>
							Sunday Closed
						</div>
						<div class="contact-info"><i class="icon icon-email"></i><a href="mailto:officeone@youremail.com">officeone@youremail.com</a>
						</div>
						<div class="social-links">
							<ul>
								<li>
									<a class="icon icon-facebook-logo" href="#"></a>
								</li>
								<li>
									<a class="icon icon-twitter-logo" href="#"></a>
								</li>
								<li>
									<a class="icon icon-instagram-logo" href="#"></a>
								</li>
								<li>
									<a class="icon icon-google-plus-logo" href="#"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-col-right">
					<div id="footer-map" class="footer-map"></div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="copyright">© 2017 Car Repair Services, <span class="clearfix visible-xs"></span>All Rights Reserved</div>
				</div>
			</div>
		</div>	<div class="back-to-top"><a href="#top"><span class="icon icon-transport"></span></a></div>
		<!-- //Footer --><div class="darkout-menu"></div>
		<!-- Appointment Form -->
		<div class="modal fade" id="appointmentForm">
			<div class="modal-dialog container">
				<div class="modal-content">
					<div class="modal-header"><a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<h2>Schedule <span class="color">Auto Service</span></h2>
							<p>To schedule an appointment with your friendly neighborhood experts at Car Repair Services, give us a call at 1-800-123-4567 or fill out the form below with your information and requested services. One of our team members will get back to you as soon as possible to confirm your appointment. </p>
							<div class="divider"></div>
							<form id="appointment-form" class="contact-form form-horizontal" name="contactform" method="post">
								<div id="successAppointment" class="successform">
									<p>Your message was sent successfully!</p>
								</div>
								<div id="errorAppointment" class="errorform">
									<p>Something went wrong, try refreshing and submitting the form again.</p>
								</div>
								<h5>Contact information</h5>
								<div class="form-inline">
									<div>
										<input type="text" name="name" class="form-control input-custom" value="" placeholder="First name">
									</div>
									<div>
										<input type="text" name="lastname" class="form-control input-custom" value="" placeholder="Last name">
									</div>
								</div>
								<div class="form-inline">
									<div>
										<input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
									</div>
									<div>
										<input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
									</div>
								</div>
								<div class="divider"></div>
								<h5>Appointment details</h5>
								<div class="form-inline">
									<div class="datetimepicker-wrap">
										<input type="text" name="date" class="form-control input-custom datetimepicker" placeholder="">
									</div>
									<div class="timepicker-wrap">
										<input type="text" name="time" class="form-control input-custom timepicker" placeholder="">
									</div>
								</div>
								<div class="form-inline">
									<div>
										<input name="autoinfo" type="text" class="form-control input-custom" value="" placeholder="Vehicle Year, Make and Model">
									</div>
									<div class="form-inline">
										<div class="select-wrapper">
											<select name="select1" class="input-custom">
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
											</select>
										</div>
										<div>
											<input name="kilometers" type="text" class="form-control input-custom" value="" placeholder="Current Kilometers">
										</div>
									</div>
								</div>
								<div class="form-inline">
									<textarea name="message" class="form-control textarea-custom" placeholder="Service Required"></textarea>
								</div>
								<div class="divider"></div>
								<div class="row">
									<div class="col-sm-4 col-md-3 bootstrap-datetimepicker-widget">
										<button type="submit" id="submit" class="btn btn-lg"><span>SUBMIT</span></button>
									</div>
									<div class="divider visible-xs"></div>
									<div class="col-sm-8 col-md-9">
										<p><i>Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</i></p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Appointment Form -->
		<?php $this->endBody() ?>
	</body>

</html>
<?php $this->endPage() ?>