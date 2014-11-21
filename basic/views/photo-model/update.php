<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\PhotoModel $model
 */

$this->title = 'Update Photo Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Photo Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="photo-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
