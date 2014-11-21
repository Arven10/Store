<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\shop\ProductModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="product-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_subcategory')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
