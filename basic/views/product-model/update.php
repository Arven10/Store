<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\ProductModel $model
 */

$this->title = 'Update Product Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
