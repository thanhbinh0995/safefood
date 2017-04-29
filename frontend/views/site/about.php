<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\Util;
$this->title = 'About';
?>
	<div class="top-title">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item">About us</li>
				</ol>
			</div>
		</div>
		<div class="name-title">
			<div class="container name-title">
				<h3>About us</h3>
			</div>
		</div>
		<section id="portfolio">
        <div class="container">
            <ul class="portfolio-filter categories-filter text-center">
                <li><a data-filter="*" class="categories active">All</a></li>
                <li class="mar-5"><a data-filter=".design" class="categories">Design</a></li>
                <li class="mar-5"><a data-filter=".developer" class="categories">Developer</a></li>
            </ul>
            <div class="rows portfolio-grid gallery-popup">
                <!-- Portfolio Item -->
                <div class="col-lg-3 col-md-3 col-lg-offset-1 col-sm-4 col-xs-6 portfolio-item developer">
                    <div class="portfolio-box">
                        <a class="porfolio-popup gallery-popup-link" href=<?= Util::getUrlImage("binh1.png")?>>
                            <div class="portfolio-image-wrap">
                                <img class="img-responsive img-circle" src=<?= Util::getUrlImage("binh1.png")?> alt="portfolio"/>
                            </div>
                            <div class="portfolio-caption-mask text-center">
                            	<div class="text">
	                                <h5 class="alt-title">Phạm Thanh Bình</h5>
	                                <p>
	                                	web developer<br>
	                                	team leader<br>
	                                	13T4
	                                </p>
                            	</div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                 <!-- Portfolio Item -->
              	<div class="col-lg-3 col-md-3 col-lg-offset-1 col-sm-4 col-xs-6 portfolio-item design">
                    <div class="portfolio-box">
                        <a class="porfolio-popup gallery-popup-link" href=<?= Util::getUrlImage("na.png")?>>
                            <div class="portfolio-image-wrap">
                                <img class="img-responsive img-circle" src="<?= Util::getUrlImage("na.png")?>" alt="portfolio"/>
                            </div>
                            <div class="portfolio-caption-mask text-center">
                                <h5 class="alt-title">Phạm Thị Quỳnh Anh</h5>
                                <p>
	                                web designer<br>
	                                13T4
	                            </p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Portfolio Item -->
                <div class="col-lg-3 col-md-3 col-lg-offset-1 col-sm-4 col-xs-6 portfolio-item developer">
                    <div class="portfolio-box">
                        <a class="porfolio-popup gallery-popup-link" href="<?= Util::getUrlImage("duy.jpg")?>">
                            <div class="portfolio-image-wrap">
                                <img class="img-responsive img-circle" src="<?= Util::getUrlImage("duy.jpg")?> "alt="portfolio"/>
                            </div>
                            <div class="portfolio-caption-mask text-center">
                                <h5 class="alt-title">Đinh Văn Duy</h5>
                                <p>
                                	web developer<br>
                                	13T4
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-lg-offset-3 col-sm-4 col-xs-6 portfolio-item design">
                    <div class="portfolio-box">
                        <a class="porfolio-popup gallery-popup-link" href=<?= Util::getUrlImage("cvv.png")?>>
                            <div class="portfolio-image-wrap">
                                <img class="img-responsive img-circle" src=<?= Util::getUrlImage("cvv.png")?> alt="portfolio"/>
                            </div>
                            <div class="portfolio-caption-mask text-center">
                                <h5 class="alt-title">Trần Cẩm Lệ</h5>
                                <p>
	                                web designer<br>
	                                13T4
	                            </p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                 <!-- Portfolio Item -->
              	<div class="col-lg-3 col-md-3 col-lg-offset-1 col-sm-4 col-xs-6 portfolio-item design design">
                    <div class="portfolio-box">
                        <a class="porfolio-popup gallery-popup-link" href=<?= Util::getUrlImage("heo.png")?>>
                            <div class="portfolio-image-wrap">
                                <img class="img-responsive img-circle" src=<?= Util::getUrlImage("heo.png")?> alt="portfolio"/>
                            </div>
                            <div class="portfolio-caption-mask text-center">
                                <h5 class="alt-title">Lê Thị Hiếu</h5>
                                <p>
	                                web designer<br>
	                                13T4
	                            </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>