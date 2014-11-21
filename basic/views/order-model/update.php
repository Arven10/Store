<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\OrderModel $model
 */

$this->title = 'Update Order Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Order Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
