<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Quality */

$this->title = $model->qualityId;
$this->params['breadcrumbs'][] = ['label' => 'Qualities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quality-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->qualityId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->qualityId], [
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
            'qualityId',
            'foodId',
            'restaurantCode',
            'star',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
