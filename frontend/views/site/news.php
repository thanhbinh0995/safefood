<?php
use common\components\Util;
use common\models\News;
use common\models\NewsTag;
use common\models\Tag;

?>
<?php $this->title = 'Safe Food | News'; ?>
<div class="top-title">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">News</li>
        </ol>
    </div>
</div>
<div class="name-title">
    <div class="container name-title">
        <h3>News</h3>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="panel-container">
                <?php
                $i = 0;
                foreach ($news as $item) {
                    $i++;
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title clickable"><a
                                        href="news-content?newsId=<?= $item->newsId ?>"><?= $item->title; ?></a></h4>
                            <span class="pull-right clickable"><i
                                        class="glyphicon glyphicon-chevron-<?php if ($i !== 1) echo 'down'; else echo 'up' ?>"></i></span>
                        </div>
                        <div class="panel-body" <?php if ($i !== 1) echo 'style="display: none;"' ?> >
                            <h4>
                                <?php
                                $tags = News::getTagsName($item);
                                echo $tags;
                                ?>
                            </h4>
                            <p><?= $item->mainHeader ?></p>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div> <!-- panel end -->
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
            <div class="tweet">
                <h3>Recent News</h3>
                <div class="twitter-content">
                    <div class="twitter-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="time">2 days ago</p>
                    </div>
                    <img src="<?= Util::getUrlImage('icon.png') ?>" alt="tweet logo"/>
                </div>
                <div class="twitter-content">
                    <div class="twitter-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="time">2 days ago</p>
                    </div>
                    <img src="<?= Util::getUrlImage('icon.png') ?>" alt="tweet logo"/>
                </div>
                <div class="twitter-content">
                    <div class="twitter-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="time">2 days ago</p>
                        <img src="<?= Util::getUrlImage('icon.png') ?>" alt="tweet logo"/>
                    </div>
                </div>
            </div>
        </div>
    </div>