<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Quality */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quality-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'foodId')->dropDownList(\common\models\Food::listFood()) ?>

    <?= $form->field($model, 'restaurantCode')->dropDownList(\common\models\Restaurant::listRestaurant()) ?>

    <?= $form->field($model, 'star')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
