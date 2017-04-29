<?php
use common\components\Util;
$this->title = 'Safe Food | News';
?>

<section id="main-content">
    <div class="top-title">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item"><a href="news">News</a></li>
            </ol>
        </div>
    </div>
    <div class="name-title">
        <div class="container name-title">
            <h3 name="news-title"><?= $news->title ?></h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="top-main-content">
                    <?= $news->content ?>
                </div>
                <div class="blockquote">
                    <h3>Blockquote</h3>
                    <blockquote>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non cumque consectetur in dolor. Aliquam iste voluptate, deserunt veniam, quidem corporis quis, dicta excepturi nostrum laboriosam eligendi, quae voluptatibus explicabo! Ipsam.
                    </blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus assumenda hic, quo eum, sequi nulla delectus facilis laborum quasi obcaecati aliquid. Obcaecati at, officiis aut nobis, ut possimus dolorem veniam.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                <div class="tweet">
                    <h3>Recent News</h3>
                    <div class="twitter-content">
                        <div class="twitter-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="time">2 days ago</p>
                        </div>
                        <img src="<?=  Util::getUrlImage('icon.png')  ?>" alt="tweet logo"/>
                    </div>
                    <div class="twitter-content">
                        <div class="twitter-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="time">2 days ago</p>
                        </div>
                        <img src="<?=  Util::getUrlImage('icon.png')  ?>" alt="tweet logo"/>
                    </div>
                    <div class="twitter-content">
                        <div class="twitter-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="time">2 days ago</p>
                            <img src="<?=  Util::getUrlImage('icon.png')  ?>" alt="tweet logo"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>