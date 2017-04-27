<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\components\Util;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?php if ($this->title) echo $this->title; else echo 'Home';  ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
    <div class="top"></div>
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <div class="logo">
                            <a href="" class="navbar-brand">
                                <img class="img-responsive" src="<?=  Util::getUrlImage('logo.png')  ?>" alt="logo"/>
                                <div class="logo-text">
                                    <p class="logo-text-top">Safe Food</p>
                                    <p class="logo-text-bottom">How to Tell if Food is Safe to Eat</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="nav navbar-nav navbar-right navbar-collapse collapse">
                        <ul class="nav navbar-nav text-center">
                            <li class="first"><a href="index">Home</a></li>
                            <li class="active"><a href="news">News</a></li>
                            <li><a href="list-safe">List Safe</a></li>
                            <li><a href="list-non-safe">List Non-safe</a></li>
                            <li><a href="about">About us</a></li>
                            <li class="last"><a href="contact" class="last">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section id="main-content">
        <?= $content ?>
    </section>
    <footer id="footer" class="footer panel-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copy-right">
                    <ul class="social mb-60 wow fadeInUp" data-wow-duration="1.5s">
                        <li>
                            <a class="facebook-icon" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="tumblr-icon" target="_blank" href="https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a>
                        </li>
                        <li>
                            <a class="google-icon" target="_blank" href="https://google.com/"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <p>Copyright @ by Tina</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
