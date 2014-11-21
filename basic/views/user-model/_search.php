<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\shop\UserModelSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phone_number') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'password') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
