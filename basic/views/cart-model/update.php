<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\CartModel $model
 */

$this->title = 'Update Cart Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cart Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cart-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
