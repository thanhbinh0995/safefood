<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Quality */

$this->title = 'Update Quality: ' . $model->qualityId;
$this->params['breadcrumbs'][] = ['label' => 'Qualities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->qualityId, 'url' => ['view', 'id' => $model->qualityId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quality-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
