<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\SubcategoryModel $model
 */

$this->title = 'Create Subcategory Model';
$this->params['breadcrumbs'][] = ['label' => 'Subcategory Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subcategory-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
