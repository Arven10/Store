<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\shop\OrderDetailsModel $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Order Details Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-details-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_order',
            'id_product',
            'price',
            'quantity',
        ],
    ]) ?>

</div>
