<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\ProductModel $model
 */

$this->title = 'Create Product Model';
$this->params['breadcrumbs'][] = ['label' => 'Product Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
