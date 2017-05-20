<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Food */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoryId')->dropDownList(\common\models\Category::listCategory  ()) ?>
    <?= $form->field($model, 'restaurantCode')->dropDownList(\common\models\Restaurant::listRestaurant  ()) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
