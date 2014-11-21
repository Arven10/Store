<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\shop\UserModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
