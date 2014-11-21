<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\CartModel $model
 */

$this->title = 'Create Cart Model';
$this->params['breadcrumbs'][] = ['label' => 'Cart Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
