<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewsTag */

$this->title = 'Update News Tag: ' . $model->newsTagId;
$this->params['breadcrumbs'][] = ['label' => 'News Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->newsTagId, 'url' => ['view', 'id' => $model->newsTagId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-tag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
