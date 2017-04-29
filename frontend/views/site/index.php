<?php

/* @var $this yii\web\View */
use common\components\Util;
$this->title = 'My Yii Application';
?>
<div id="carousel-example-generic" class="carousel intro slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active">1</li>
				<li data-target="#carousel-example-generic" data-slide-to="1">2</li>
				<li data-target="#carousel-example-generic" data-slide-to="2">3</li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<!-- First slide -->
                                <div class="item active" style="background-image:url(<?= Util::getUrlImage('P1020176.jpg') ?>?q=40&w=1650&sharp=30)">
					<div class="carousel-caption">
						<h2 data-animation="animated bounceInDown">
						Welcome to
						 </h2>
						<h1 data-animation="animated bounceInUp">
						Safe Food
						</h1>
					</div>
				</div>
				<!-- /.item -->
				<!-- Second slide -->
				<div class="item" style="background-image:url(<?= Util::getUrlImage('Life-of-Pix-free-stock-food-fruits-healthy-Slike.jpg') ?>)">
					<div class="carousel-caption">
						<h2 data-animation="animated zoomInLeft">
						Welcome to </h2>
						<h1 data-animation="animated zoomInRight">
						Safe Food</h1>
						<a href="list-safe" class="btn btn-ghost btn-lg" data-animation="animated bounceIn">Safe Restaurants</a><a href="list-non-safe" class="btn btn-primary btn-lg" data-animation="animated bounceIn">Non-safe Food</a>
					</div>
				</div>
				<!-- /.item -->
				<!-- Third slide -->
				<div class="item" style="background-image:url(<?= Util::getUrlImage('HNCK4585.jpg') ?>?q=40&w=1650&sharp=30)">
					<div class="carousel-caption">
						<h2 data-animation="animated bounceInLeft">
						Welcome to</h2>
						<h1 data-animation="animated bounceInRight">
						Safe Food</h1>
						<a href="news" class="btn btn-ghost btn-lg" data-animation="animated zoomInRight">News</a><a href="contact" class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Contact</a>
					</div>
				</div>
				<!-- /.item -->
			</div>
			<!-- /.carousel-inner -->
			<!-- Controls (currently displayed none from style.css)-->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 text-center">
						<h2 class="section-heading">WHAT WE STAND FOR<br/>& OUR <b>PRINCIPLES</b></h2>
						<hr>
						<p>
							Quản lý An toàn vệ sinh thực phẩm tập trung chủ yếu vào việc quản lý và thông báo cho mọi người biết về tình hình vệ sinh an toàn thực phẩm của cửa hàng đã và chưa đạt chuẩn về vệ sinh an toàn thực phẩm trên toàn thành phố.
						</p>
						<p>
							Tổ chức/Cá nhân tra cứu trực tuyến thông qua cổng Thông tin của hệ thống nhằm giảm thiểu sự đi lại và đảm bảo tính minh bạch.
						</p>
					</div>
				</div>
			</div>
		</section>
