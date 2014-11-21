<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\shop\ProductModelSearch $searchModel
 */

$this->title = 'Product Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_subcategory',
            'name',
            'description',
            'cost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
