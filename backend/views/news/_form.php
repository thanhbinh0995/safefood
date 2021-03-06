<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Util;
use kartik\file\FileInput;
use common\models\Category;
use common\models\Tag;
use yii\redactor\widgets\Redactor;
use dosamigos\multiselect\MultiSelect;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?> 

    <?= $form->field($model, 'categoryId')->dropDownList(Category::listCategory()) ?>

    <?php
    $data_types = Tag::listTag();
    echo $form->field($model, 'tags')->widget(Select2::classname(), [
        'data' => $data_types,
        'language' => 'de',
        'options' => ['multiple' => true, 'placeholder' => 'Select tag ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mainHeader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fileImage')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'allowedFileExtensions'=>['jpg', 'gif', 'png'],
            'initialPreview'=>[
                Html::img(Util::getUrlImage($model->image))
            ],
            'overwriteInitial'=>true,
            'showUpload' => false,
            'showCaption' => false,
        ]
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
