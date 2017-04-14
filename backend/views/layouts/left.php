<?php 
use common\components\Util;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Util::getUrlImage(Yii::$app->user->identity->avatar) ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username   ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    [
                        'label' => Yii::t('app', 'User'),
                        'icon' => 'glyphicon glyphicon-user',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List User'), 'icon' => 'fa fa-circle-o', 'url' => ['/user'],],
                            ['label' => Yii::t('app', 'Create User'), 'icon' => 'fa fa-circle-o', 'url' => ['/user/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Category'),
                        'icon' => 'glyphicon glyphicon-user',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Category'), 'icon' => 'fa fa-circle-o', 'url' => ['/category'],],
                            ['label' => Yii::t('app', 'Create Category'), 'icon' => 'fa fa-circle-o', 'url' => ['/category/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Food'),
                        'icon' => 'glyphicon glyphicon-user',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Food'), 'icon' => 'fa fa-circle-o', 'url' => ['/food'],],
                            ['label' => Yii::t('app', 'Create Food'), 'icon' => 'fa fa-circle-o', 'url' => ['/food/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'News'),
                        'icon' => 'glyphicon glyphicon-user',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List News'), 'icon' => 'fa fa-circle-o', 'url' => ['/news'],],
                            ['label' => Yii::t('app', 'Create News'), 'icon' => 'fa fa-circle-o', 'url' => ['/news/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Quality'),
                        'icon' => 'glyphicon glyphicon-user',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Quality'), 'icon' => 'fa fa-circle-o', 'url' => ['/quality'],],
                            ['label' => Yii::t('app', 'Create Quality'), 'icon' => 'fa fa-circle-o', 'url' => ['/quality/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Restaurant'),
                        'icon' => 'glyphicon glyphicon-user',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Restaurant'), 'icon' => 'fa fa-circle-o', 'url' => ['/restaurant'],],
                            ['label' => Yii::t('app', 'Create Restaurant'), 'icon' => 'fa fa-circle-o', 'url' => ['/restaurant/create'],],
                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'Tag'),
                        'icon' => 'glyphicon glyphicon-user',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('app', 'List Tag'), 'icon' => 'fa fa-circle-o', 'url' => ['/tag'],],
                            ['label' => Yii::t('app', 'Create Tag'), 'icon' => 'fa fa-circle-o', 'url' => ['/tag/create'],],
                        ],
                    ],
                    ['label' => 'Login', 'icon' => 'fa  fa-sign-out', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
