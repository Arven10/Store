<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\shop\SubcategoryModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="subcategory-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_category')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
