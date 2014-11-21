<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\OrderDetailsModel $model
 */

$this->title = 'Create Order Details Model';
$this->params['breadcrumbs'][] = ['label' => 'Order Details Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-details-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
