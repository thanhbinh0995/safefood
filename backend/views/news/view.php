<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\Util;
use common\models\News;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->newsId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->newsId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'newsId',
            'categoryId',
            [
                'label' => 'Tags',
                'value' => News::getTagsName($model),
            ],
            'title',
            'mainHeader',
            'content:ntext',
            [
                'attribute'=>'image',
                'value'=>  Util::getUrlImage($model->image),
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
