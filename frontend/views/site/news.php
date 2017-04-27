<?php
    use common\components\Util;
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title clickable">News title 1</h4>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo saepe eius, quasi mollitia nulla obcaecati est, suscipit rerum repellat inventore at quibusdam et maxime facere perspiciatis a ut sunt amet.</p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title clickable">News title 2</h4>
                            <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        </div>
                        <div class="panel-body" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo saepe eius, quasi mollitia nulla obcaecati est, suscipit rerum repellat inventore at quibusdam et maxime facere perspiciatis a ut sunt amet.</p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title clickable">News title 3</h4>
                            <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        </div>
                        <div class="panel-body" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo saepe eius, quasi mollitia nulla obcaecati est, suscipit rerum repellat inventore at quibusdam et maxime facere perspiciatis a ut sunt amet.</p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title clickable">News title 4</h4>
                            <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        </div>
                        <div class="panel-body" style="display: none;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo saepe eius, quasi mollitia nulla obcaecati est, suscipit rerum repellat inventore at quibusdam et maxime facere perspiciatis a ut sunt amet.</p>
                        </div>
                    </div>
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