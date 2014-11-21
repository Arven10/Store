<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\shop\OrderDetailsModelSearch $searchModel
 */

$this->title = 'Order Details Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-details-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Details Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_order',
            'id_product',
            'price',
            'quantity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
