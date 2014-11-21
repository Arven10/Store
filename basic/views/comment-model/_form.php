<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\shop\CommentModel $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="comment-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_product')->textInput() ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => 1000]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
